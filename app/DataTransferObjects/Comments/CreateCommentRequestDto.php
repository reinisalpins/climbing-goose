<?php

declare(strict_types=1);

namespace App\DataTransferObjects\Comments;

use App\Models\User;

class CreateCommentRequestDto
{
    public function __construct(
        public int $postId,
        public string $body,
        public User $user,
    ) {}
}
