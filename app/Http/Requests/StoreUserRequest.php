<?php

namespace App\Http\Requests;

use App\Rules\UserExists;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules():array
    {
        return [
            'name' => ['required'],
            'email' => ['required','email',new UserExists],
            'password' => ['required'],
            'password_confirmation' => ['required'],
        ];

    }
}
