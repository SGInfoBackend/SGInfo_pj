<?php

namespace App\Http\Livewire;

use App\Models\RentHouse;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class RoomComponent extends Component
{
    public function render()
    {
        $rooms = Cache::remember('room', now()->addMinutes(10), function () {
            return RentHouse::orderBy('Rent_House_ID', 'DESC')->paginate(5);
        });
        return view('livewire.room-component', ['rooms' => $rooms])->layout('layouts.base');
    }
}
