<?php

namespace App\Services\auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginService
{

    public function authenticate(array $data)
    {
        $user = User::where('email',$data['email'])
                ->where('verified',1)
                ->first();

        if(!$user) {
            return redirect()->back()->with('error','Email not found!');
        }

        if(Hash::check($data['password'],$user->password))
        {
            Auth::login($user,true);
            return redirect()->route('home');
        }

        return redirect()->back()->with('error','Wrong password!');
    }
}
