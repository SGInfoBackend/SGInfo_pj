<?php

namespace App\Http\Livewire;

use App\Models\RentHouse;
use Livewire\Component;

class RoomComponent extends Component
{
    public function render()
    {
        $rooms = RentHouse::orderBy('Rent_House_ID', 'DESC')->get();
        return view('livewire.room-component',['rooms' => $rooms])->layout('layouts.base');
    }
}
