<?php

namespace App\Http\Livewire\Bookroom;

use Livewire\Component;

class BookRoomComponent extends Component
{
    
    public function StoreData()
    {
        dd("Ok");

    }
    public function render()
    {
        return view('livewire.bookroom.book-room-component');
    }
}
