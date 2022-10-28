<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Rules\RegisterUser;
use App\Rules\UserName;
use Livewire\Component;

class RegisterComponent extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => ['required', new UserName()],
            'email' => ['required', new RegisterUser()],
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);
    }


    public function registerUser()
    {
        $validated = $this->validate([
            'name' => ['required', new UserName()],
            'email' => ['required', new RegisterUser()],
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);
        User::create($validated);
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.register-component');
    }
}
