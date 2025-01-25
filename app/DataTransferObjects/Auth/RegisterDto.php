<?php

declare(strict_types=1);

namespace App\DataTransferObjects\Auth;

class RegisterDto
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
    ) {}
}
