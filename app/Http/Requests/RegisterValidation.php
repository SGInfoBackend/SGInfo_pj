<?php

namespace App\Http\Requests;

use App\Rules\PasswordConfirmed;
use App\Rules\RegisterUser;
use App\Rules\UserName;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;

class RegisterValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', new UserName()],
            'email' => ['required', 'email', new RegisterUser()],
            'password' => ['required', 'min:8'],
            'password_confirmation' => ['required'],
        ];
    }
}
