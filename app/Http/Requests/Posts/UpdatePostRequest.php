<?php

declare(strict_types=1);

namespace App\Http\Requests\Posts;

use App\DataTransferObjects\Posts\UpdatePostRequestDto;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'post_id' => [
                'required',
                'integer',
                Rule::exists(Post::class, 'id')
            ],
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'body' => [
                'required',
                'string',
            ],
            'categories' => [
                'required',
                'array',
            ],
            'categories.*' => [
                'required',
                'integer',
                Rule::exists(Category::class, 'id'),
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

    public function getData(): UpdatePostRequestDto
    {
        return new UpdatePostRequestDto(
            postId: $this->getPostId(),
            title: $this->input('title'),
            body: $this->input('body'),
            categories: $this->input('categories'),
        );
    }
}
