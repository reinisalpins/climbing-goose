<?php

declare(strict_types=1);

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class SearchPostsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'query' => [
                'string',
                'nullable',
            ]
        ];
    }

    public function getQuery(): ?string
    {
        return $this->input('query');
    }
}
