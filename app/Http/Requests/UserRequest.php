<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($this->route('user')),
            ],
            'password' => 'required|string|min:6',
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "O nome é obrigatório",
            "email.required" => "O e-mail é obrigatório",
            "email.unique" => "O e-mail já foi cadastrado",
            "email.email" => "O e-mail é inválido",
            "password.required" => "A senha é obrigatória",
            "password.min" => "A senha deve ter pelo menos 6 caracteres",
        ];
    }
}
