<?php

namespace App\Http\Livewire;

use App\Models\RentHouse;
use Illuminate\Support\Facades\Cache;
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
        $roomDetail = Cache::remember("roome_detail_{$this->renthouse_id}", now()->addMinutes(10), function () {
            return RentHouse::where('Rent_House_ID', $this->renthouse_id)->first();
        });
        $facitlites = explode(',', $roomDetail->Facilities_IDS);
        $keyfeatures = explode(',', $roomDetail->KeyFeature_IDS);
        return view('livewire.room-detail-component', [
            'roomDetail' => $roomDetail,
            'facilities' => $facitlites,
            'keyfeatures' => $keyfeatures
        ])->layout('layouts.base');
    }
}
