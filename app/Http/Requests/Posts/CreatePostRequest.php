<?php

declare(strict_types=1);

namespace App\Http\Requests\Posts;

use App\DataTransferObjects\Posts\CreatePostRequestDto;
use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreatePostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
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
            ],
        ];
    }

    public function getData(): CreatePostRequestDto
    {
        return new CreatePostRequestDto(
            title: $this->input('title'),
            body: $this->input('body'),
            categories: $this->input('categories'),
            user: $this->user()
        );
    }
}
