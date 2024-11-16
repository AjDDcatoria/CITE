<?php

namespace App\Services\auth;

use App\Models\User;

class LoginService
{

    public function authenticate(array $data)
    {
        $user = User::where('email',$data['email'])
                ->where('verified',1)
                ->first();

        if(! $user)
        {

        }
    }
}
