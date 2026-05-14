<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
            'agency_name' => 'sometimes|nullable|string|max:255',
            'client_type' => 'sometimes|nullable|string|max:100',
            'role' => [
                'sometimes',
                Rule::in(['agency_owner', 'agent']),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'password.confirmed' => 'The passwords do not match.',
            'email.unique' => 'This email is already registered.',
        ];
    }
}
