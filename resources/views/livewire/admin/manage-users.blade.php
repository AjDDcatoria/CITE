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
                            <button class="btn btn-xs w-14 rounded">Edit</button>
                        @else
                            <button class="btn btn-xs w-14 rounded">Verify</button>
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
</section>
