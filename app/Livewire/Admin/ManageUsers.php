<?php

namespace App\Livewire\Admin;

use Illuminate\View\View;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ManageUsers extends Component
{
    #[Rule('string|in:student,instructor,all')]
    public string $userFilter = 'all';

    #[Rule('string')]
    public string $campusFilter = 'all';

    #[Rule('string|in:0,1,all')]
    public string $statusFilter = 'all';

    #[Rule('nullable|string')]
    public ?string $search = null;

    public function updated($name, $value)
    {
        $this->validate();

        dd([
           'user' => $this->userFilter,
           'campus' => $this->campusFilter,
            'status' => $this->statusFilter
        ]);
    }


    public function render(): View
    {
        return view('livewire.admin.manage-users');
    }
}
