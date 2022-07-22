<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserProfileComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $phone;
    public $mobile;
    public $block;
    public $profile_image;
    public $street;
    public $unit;
    public $postal_code;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'phone' => 'required|numeric|min:11',
            'profile_image' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);
    }

    public function uploadProfile()
    {
        $this->validate([
            'phone' => 'required|numeric|min:11',
            'profile_image' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $userprofile = User::find(Auth::user()->id);
        if ($this->name) {
            $userprofile->name = $this->name;
        }else {
            $userprofile->name = Auth::user()->name;
        }

        $userprofile->phone = $this->phone;
        $userprofile->mobile = $this->mobile;
        $userprofile->block = $this->block;
        $userprofile->street = $this->street;
        $userprofile->unit = $this->unit;
        $userprofile->postal_code = $this->postal_code;
        $imageName = Carbon::now()->timestamp. '.' . $this->profile_image->extension();
        $this->profile_image->storeAs('profile_images',$imageName);
        $userprofile->profile_photo_path = $imageName;
        $userprofile->save();
        session()->flash('success_message', 'User Profile has been uploaded successfully!');
        $this->dispatchBrowserEvent('hide_modal');

    }

    public function render()
    {
        $user = User::find(Auth::user()->id);
        return view('livewire.user-profile-component',['user' => $user])->layout('layouts.base');
    }
}
