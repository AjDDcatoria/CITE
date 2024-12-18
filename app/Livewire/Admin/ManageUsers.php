<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class ManageUsers extends Component
{
    use WithPagination;

    #[Rule('string|in:student,instructor,all')]
    public string $userFilter = 'all';

    #[Rule('string')]
    public string $campusFilter = 'all';

    #[Rule('string|in:0,1,all')]
    public string $statusFilter = 'all';

    #[Rule('nullable|string')]
    public ?string $search = null;

    public string $to_verify_user_Id = '';
    public string $to_verify_user_fullname = '';
    public User $user_model;

    public function render(): View
    {
        // Start building the query
        $query = User::query();

        // Apply filters if they are not "all"
        if ($this->userFilter !== 'all') {
            $query->where('role', $this->userFilter);
        }

        if ($this->campusFilter !== 'all') {
            $query->where('campus', $this->campusFilter);
        }

        if ($this->statusFilter !== 'all') {
            $query->where('verified', $this->statusFilter);
        }

        // Apply search filter if provided
        if (!empty($this->search)) {
            $query->where(function ($subQuery) {
                $subQuery->where('firstname', 'like', '%' . $this->search . '%')
                    ->orWhere('lastname', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
            });
        }

        $users = $query->paginate(10);

        return view('livewire.admin.manage-users', [
            'users' => $users,
        ]);
    }

    public function verify(array $v_user): void
    {
        $this->to_verify_user_Id = $v_user['id'];
        $this->to_verify_user_fullname = $v_user['firstname'] . ' ' . $v_user['lastname'];
    }

    public function verify_confirm(): void
    {
        DB::table('users')
            ->where('id',$this->to_verify_user_Id)
            ->where('verified',0)
            ->update(['verified' => 1]);

        $this->reset(['to_verify_user_Id','to_verify_user_fullname']);
    }
}