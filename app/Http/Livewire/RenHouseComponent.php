<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\RentHouse;

class RenHouseComponent extends Component
{
    public function render()
    {
        $rentHouse = RentHouse::all();
        return view('livewire.ren-house-component', ['rentHouse' => $rentHouse])->layout('layouts.base');
    }
}
