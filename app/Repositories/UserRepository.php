<?php

declare(strict_types=1);

namespace App\Repositories;

use App\DataTransferObjects\Auth\RegisterDto;
use App\Models\User;

class UserRepository
{
    public function __construct(
        private readonly User $user
    ) {}

    public function createUser(RegisterDto $dto): User
    {
        return $this->user->create([
            'email' => $dto->email,
            'password' => $dto->password,
            'name' => $dto->name,
        ]);
    }
}
