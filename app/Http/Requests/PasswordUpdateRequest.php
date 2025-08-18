<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordUpdateRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'current_password' => 'required',
            'password' => 'required|min:6|confirmed'
        ];
    }

    public function messages(): array
    {
        return[
            'currente_password.required' => 'Informe a senha atual.',
            'password.required' => 'Informe a nova senha.',
            'password.min' => 'A senha deve ter no minimo :min caracters.',
            'password.confirmed' => 'A confirmação da nova senha não confere.',
        ];
    }
}
