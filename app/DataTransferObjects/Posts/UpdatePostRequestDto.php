<?php

declare(strict_types=1);

namespace App\DataTransferObjects\Posts;

class UpdatePostRequestDto
{
    public function __construct(
        public int $postId,
        public string $title,
        public string $body,
        public array $categories,
    ) {}
}
