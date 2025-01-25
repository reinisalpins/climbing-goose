<?php

declare(strict_types=1);

namespace App\Http\Requests\Comments;

use App\DataTransferObjects\Comments\CreateCommentRequestDto;
use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateCommentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'post_id' => [
                'required',
                'integer',
                Rule::exists(Post::class, 'id'),
            ],
            'body' => [
                'required',
                'string',
                'max:255',
            ]
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'post_id' => $this->getPostId()
        ]);
    }

    public function getPostId(): int
    {
        return (int)$this->route('post_id');
    }

    public function getData(): CreateCommentRequestDto
    {
        return new CreateCommentRequestDto(
            postId: $this->getPostId(),
            body: $this->input('body'),
            user: $this->user(),
        );
    }
}
