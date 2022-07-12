<?php

namespace App\Http\Livewire;

use App\Models\RentHouse;
use Livewire\Component;

class RoomDetailComponent extends Component
{
    public $renthouse_id;

    public function mount($Rent_House_ID)
    {
        $this->renthouse_id = $Rent_House_ID;
    }
    public function render()
    {
        $roomDetail = RentHouse::where('Rent_House_ID', $this->renthouse_id)->first();
        return view('livewire.room-detail-component', ['roomDetail' => $roomDetail])->layout('layouts.base');
    }
}
