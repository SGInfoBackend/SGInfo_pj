<?php

namespace App\Http\Livewire;

use App\Models\GHeader;
use Livewire\Component;

class AddGeneralForm extends Component
{
    public function render()
    {
        $gheaders = GHeader::all();
        return view('livewire.add-general-form',["gheaders"=>$gheaders])->layout('layouts.base');
    }
}
