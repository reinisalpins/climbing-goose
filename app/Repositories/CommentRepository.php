<?php

declare(strict_types=1);

namespace App\Repositories;

use App\DataTransferObjects\Comments\CreateCommentRequestDto;
use App\Models\Comment;

class CommentRepository
{
    public function __construct(
        private readonly Comment $comment
    )
    {
    }

    public function createComment(CreateCommentRequestDto $data): void
    {
        $this->comment->create([
           'post_id' => $data->postId,
           'user_id' => $data->user->id,
           'body' => $data->body,
        ]);
    }

    public function deleteComment(int $commentId): void
    {
        $this->comment->findOrFail($commentId)->delete();
    }

    public function getById(int $commentId): Comment
    {
        return $this->comment->findOrFail($commentId);
    }
}
