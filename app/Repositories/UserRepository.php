<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function getById(int $id): ?User
    {
        $user = User::query()->find($id);

        /** @var User|null $user */
        return $user;
    }
}
