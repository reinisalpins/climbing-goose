<?php

declare(strict_types=1);

namespace App\Http\Requests\Comments;

use App\Models\Comment;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DeleteCommentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'comment_id' => [
                'required',
                'integer',
                Rule::exists(Comment::class, 'id'),
            ],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'comment_id' => $this->getCommentId(),
        ]);
    }

    public function getCommentId(): int
    {
        return (int) $this->route('comment_id');
    }
}
