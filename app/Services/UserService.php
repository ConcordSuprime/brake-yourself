<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;

class UserService
{
    public function __construct(
        protected UserRepository $repository
    )
    {
    }

    public function getById(int $id): ?User
    {
        return $this->repository->getById($id);
    }
}
