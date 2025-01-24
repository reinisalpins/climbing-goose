<?php

declare(strict_types=1);

namespace App\Repositories;

use App\DataTransferObjects\Posts\CreatePostRequestDto;
use App\DataTransferObjects\Posts\UpdatePostRequestDto;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PostRepository
{
    public function __construct(
        private readonly Post $post
    )
    {
    }

    public function createPost(CreatePostRequestDto $dto): void
    {
        $post = $this->post->create([
            'title' => $dto->title,
            'body' => $dto->body,
            'user_id' => $dto->user->id
        ]);

        $post->categories()->attach($dto->categories);
    }

    public function getUserPosts(User $user): Collection
    {
        return $this->post
            ->where('user_id', '=', $user->id)
            ->get();
    }

    /**
     * @throws ModelNotFoundException
     */
    public function getById(int $id): Post
    {
        return $this->post->findOrFail($id);
    }

    public function updatePost(UpdatePostRequestDto $data): Post
    {
        $post = $this->getById($data->postId);

        $post->update([
            'title' => $data->title,
            'body' => $data->body,
        ]);

        $post->categories()->sync($data->categories);

        return $post;
    }

    public function deletePost(int $postId): void
    {
        $this->getById($postId)->delete();
    }
}
