<?php

namespace App\Services\user;

use App\Models\User;

class UserService
{
    protected User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function createUser(array $user): void
    {
        $this->user->create($user);
    }
}
