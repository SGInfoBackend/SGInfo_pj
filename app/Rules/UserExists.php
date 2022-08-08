<?php

namespace App\Rules;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class UserExists implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {

        $user = User::where('email',$value)->first();
        $password = User::where('password',$value)->first();
        $name = User::where('name',$value)->first();

        if(is_null($user)){
            return true;
        }
        elseif($password){
            return true;
        }
        elseif($name){
            return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return [
            'email'=>'This user already exists!',
            'password'=>'Your password must be at least 8!',
            'name'=>'Your name must be string!',
        ];
    }
}