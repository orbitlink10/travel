<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:clients,email' . ($this->client ? ',' . $this->client->id : ''),
            'phone' => 'nullable|string|max:20',
            'preferences' => 'nullable|array',
        ];
    }
}
