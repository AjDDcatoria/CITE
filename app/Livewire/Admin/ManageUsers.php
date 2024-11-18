<?php

namespace App\Livewire\Admin;

use Illuminate\View\View;
use Livewire\Component;

class ManageUsers extends Component
{
    public function click()
    {
        dd('Clicked!');
    }

    public function render(): View
    {
        return view('livewire.admin.manage-users');
    }
}
