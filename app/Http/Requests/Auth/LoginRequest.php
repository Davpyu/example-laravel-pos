<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Knuckles\Scribe\Attributes\BodyParam;

#[BodyParam('email', 'string', 'Email Address from user credential', true)]
#[BodyParam('password', 'string', 'Password from user credential', true)]
#[BodyParam('remember_me', 'boolean', 'Determined about how token generated works', true)]
class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check() === false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
            'remember_me' => ['required', 'boolean'],
        ];
    }
}
