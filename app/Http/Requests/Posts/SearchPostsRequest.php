<?php

declare(strict_types=1);

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class SearchPostsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'term' => [
                'string',
                'nullable',
            ],
        ];
    }

    public function getTerm(): ?string
    {
        return $this->input('term');
    }
}
