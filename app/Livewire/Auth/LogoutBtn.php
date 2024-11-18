<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutBtn extends Component
{
    public function logout(): void
    {
        Auth::logout();
        $this->redirect(route('login'));
    }

    public function render()
    {
        return view('livewire.auth.logout-btn');
    }
}
