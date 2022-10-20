<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegistrationLoginComponent extends Component
{
    public $users, $email, $password, $name, $confirmPassword;

    public $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ];


    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function login()
    {

        if (Auth::attempt(array('email' => $this->email, 'password' => $this->password))) {
            session()->flash('message', 'Post successfully updated.');
            return redirect()->route('home');
        } else {
            session()->flash('error', 'email and password are wrong.');
        }
    }

    public function logout()
    {

        Auth::logout();

        return redirect('login-register');
    }

    // public function rules(){
    //     return[
    //         'name' => ['required', new UserExists],
    //         'email' => ['required', new UserExists],
    //         'password' => ['required',new UserExists],
    //         'confirmPassword' => ['required','same:password'],
    //     ];
    // }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function registerStore(User $user)
    {
        $this->validate();

        $this->resetInputFields();

        $this->password = Hash::make($this->password);

        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->save();

        session()->flash('message', 'Your register successfully Go to the login page.');

        $this->resetInputFields();

        return redirect(route('home'));
    }

    public function render()
    {
        return view('livewire.registration-login-component')->layout('layouts.base');
    }
}
