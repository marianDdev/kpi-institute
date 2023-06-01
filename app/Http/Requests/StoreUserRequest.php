<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:256'],
            'last_name' => ['required', 'string', 'max:256'],
            'is_admin' => ['nullable', 'boolean'],
            'email' => ['required', 'email', 'unique:users'],
            'prefix' => ['required', 'string'],
            'phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'company' => ['nullable', 'string'],
            'country' => ['required', 'string'],
        ];
    }
}
