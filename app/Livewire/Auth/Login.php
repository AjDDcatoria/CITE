<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|string|min:8'
    ];

    public function submit()
    {
        $this->validate();

        dd($this->email,$this->password);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
