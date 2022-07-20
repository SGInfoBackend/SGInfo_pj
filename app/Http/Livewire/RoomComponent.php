<?php

namespace App\Http\Livewire;

use App\Models\RentHouse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RoomComponent extends Component
{
    public function render()
    {
        $rooms = RentHouse::where('USER_ID', Auth::user()->id)->orderBy('Rent_House_ID', 'DESC')->paginate(5);
        return view('livewire.room-component',['rooms' => $rooms])->layout('layouts.base');
    }
}
