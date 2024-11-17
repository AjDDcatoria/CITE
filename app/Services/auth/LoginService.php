<?php

namespace App\Services\auth;

use App\Constants\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginService
{
    protected User $user_model;

    public function __construct(User $user_model)
    {
        $this->user_model = $user_model;
    }


    public function authenticate(array $data)
    {
        $user = $this->user_model
                ->where('email',$data['email'])
                ->where('verified',1)
                ->first();

        if(!$user) {
            return redirect()->back()->with('error','Email not found!');
        }

        if(Hash::check($data['password'],$user->password)) {
            Auth::login($user,true);

            if($user->role === Role::ADMIN) {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('home');
        }

        return redirect()->back()->with('error','Wrong password!');
    }
}