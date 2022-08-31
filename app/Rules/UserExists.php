<?php

namespace App\Rules;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class UserExists implements Rule
{
    public $data = [];

    public function __construct()
    {
        //
    }

    public function passes($attribute, $value)
    {

        $user = User::where('email',$value)->first();
        // $password = User::where('password',$value)->first();
        // $name = User::where('name',$value)->first();

        if(is_null($user)){
            return true;
        }
        // elseif($password){
        //     return true;
        // }
        // elseif($name){
        //     return true;
        // }
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
            'email'=>'This email already exists!',
        ];
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}
