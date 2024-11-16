<?php

namespace App\Livewire\Auth;

use Illuminate\View\View;
use Livewire\Component;

class Login extends Component
{
    public string $email;
    public string $password;

    protected array $rules = [
        'email' => 'required|email',
        'password' => 'required|string|min:8'
    ];

    public function submit(): Void
    {
        $this->validate();

    }

    public function render(): View
    {
        return view('livewire.auth.login');
    }
}
