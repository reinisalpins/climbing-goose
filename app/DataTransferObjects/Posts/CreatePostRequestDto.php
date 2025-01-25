<?php

declare(strict_types=1);

namespace App\DataTransferObjects\Posts;

use App\Models\User;

class CreatePostRequestDto
{
    public function __construct(
        public string $title,
        public string $body,
        public array $categories,
        public User $user,
    ) {}
}
