<section id="manage-users">
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
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach([1,2,3,4,5,6,7,8,9,10,11,12] as $count)
                <tr>
                    <td>{{ $count  }}</td>
                    <td>{{ $user->firstname  }} {{ $user->lastname  }}</td>
                    <td> {{ $user->email  }} </td>
                    <td> {{ $user->role }} </td>
                    <td> {{ $user->verified == 1 ? 'verified' : 'request' }}  </td>
                    <td> {{ $user->course  }} </td>
                    <td> {{ $user->campus  }} </td>
                    <th>menu</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
