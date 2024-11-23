<section id="manage-users" class="!overflow-hidden">
    <div class="filters-container">
        <div class="filters">
            {{-- User filter --}}
            <select wire:model.lazy="userFilter">
                <option disabled>Filter</option>
                <option value="all">All users</option>
                <option value="student">Student</option>
                <option value="instructor">Instructor</option>
            </select>

            {{-- Campus filter --}}
            <select wire:model.lazy="campusFilter" name="campusFilter">
                <option disabled selected>Filter</option>
                <option value="all">All campus</option>
                <option value="tandag">Tandag</option>
                <option value="marihatag">Marihatag</option>
                <option value="cantilan">Cantilan</option>
                <option value="cagwait">Cagwait</option>
                <option value="tagbina">Tagbina</option>
                <option value="san miguel">San Miguel</option>
            </select>

            {{-- Status filter --}}
            <select wire:model.lazy="statusFilter" name="statusFilter">
                <option disabled selected>Filter</option>
                <option value="all">All status</option>
                <option value="1">Verified</option>
                <option value="0">Request</option>
            </select>
        </div>

        {{-- Search filter --}}
        <div>
            <label class="input input-bordered input-sm flex items-center gap-2">
                <input type="text" wire:model.lazy="search" name="search" class="grow" placeholder="Search" />
                <i class='bx bx-search'></i>
            </label>
        </div>
    </div>

    {{-- Table --}}
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Course</th>
                    <th>Campus</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $f_user)
                <tr>
                    <td>{{ $loop->iteration   }}</td>
                    <td>{{ $f_user->firstname  }} {{ $f_user->lastname  }}</td>
                    <td> {{ $f_user->email  }} </td>
                    <td> {{ $f_user->role }} </td>
                    <td>
                        @if($f_user->verified)
                            <div class="badge bg-green-300 gap-2">
                                verified
                            </div>
                        @else
                            <div class="badge bg-red-300  gap-2">
                                request
                            </div>
                        @endif
                    </td>
                    <td> {{ $f_user->course  }} </td>
                    <td> {{ $f_user->campus  }} </td>
                    <th>
                        @if($f_user->verified)
                            <button
                                class="btn btn-xs w-14 rounded"
                                onclick="edit_user_modal.showModal()"
                            >
                                Edit
                            </button>
                        @else
                            <button
                                class="btn btn-xs w-14 rounded"
                                wire:click="verify({{ $f_user }})"
                                onclick="
                                    setTimeout(()=>{
                                        verify_modal.showModal()
                                    },550)
                                 "
                            >
                                Verify
                            </button>
                        @endif
                    </th>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="sticky bottom-0 bg-white z-10">
                    <th colspan=8">
                        <div class="join float-right">
                            {{ $users->links('pagination-links')  }}
                        </div>
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
    {{-- Modal verify --}}
    <dialog id="verify_modal" class="modal">
        <div class="modal-box">
          <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">
                ✕
            </button>
          </form>
          <h3 class="text-lg font-bold">Verify</h3>
          <p class="py-4">
            Are you sure you want to verify <strong>{{ $to_verify_user_fullname }}</strong> ?
        </p>
        <div class="modal-action">
            <form method="dialog">
              <button class="btn btn-error">Cancel</button>
            </form>
            <form method="dialog">
                <button class="btn btn-success" wire:click='verify_confirm'>
                    Confirm
                </button>
              </form>
          </div>
        </div>
      </dialog>

      {{-- Todo Modal edit user --}}
      <dialog id="edit_user_modal" class="modal">
        <div class="modal-box">
          <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">
                ✕
            </button>
          </form>
          <h3 class="text-lg font-bold">Edit</h3>
          <p class="py-4">
            <strong>Soon...</strong>
         </p>
        </div>
      </dialog>
</section>
