<?php

namespace App\Livewire\Auth;

use App\Services\auth\LoginService;
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

    public function submit(LoginService $service): void
    {
        $data = $this->validate();

        $service->authenticate($data);
    }

    public function render(): View
    {
        return view('livewire.auth.login');
    }
}
