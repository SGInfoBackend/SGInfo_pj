<?php

namespace App\Http\Livewire;

use App\Models\RentHouse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class RoomDetailComponent extends Component
{
    public $renthouse_id;
    public $check_inData;
    public $check_outData;
    public $adult;
    public $children;

    public function mount($Rent_House_ID)
    {
        $this->renthouse_id = $Rent_House_ID;
    }
    public function StoreData(BookRoom $bookRoom)
    {
        $bookRoom->rent_house_id = $this->renthouse_id;
        $bookRoom->check_in = $this->check_inData;
        $bookRoom->check_out = $this->check_outData;
        $bookRoom->adult = $this->adult;
        $bookRoom->children = $this->children;
        $bookRoom->user_id = Auth::user()->id;
        // Mail::to('example@mail.com')->send(new BookRoomConfirmedMarkdown($bookRoom));
        Mail::to('example@mail.com')->queue(new BookRoomConfirmedMarkdown($bookRoom));
        session()->flash('success_message', "Please Check your email!");
        $bookRoom->save();
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
