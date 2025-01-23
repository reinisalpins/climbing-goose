<?php

declare(strict_types=1);

namespace App\Http\Requests\Auth;

use App\DataTransferObjects\Auth\RegisterDto;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users',
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed'
            ]
        ];
    }

    public function getData(): RegisterDto
    {
        return new RegisterDto(
            name: $this->input('name'),
            email: $this->input('email'),
            password: $this->input('password'),
        );
    }
}
