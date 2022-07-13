<?php

namespace App\Http\Livewire;

use App\Models\General;
use App\Models\GHeader;
use Livewire\Component;

class GeneralComponent extends Component
{

    public function render()
    {
        $general = General::orderBy('created_at','DESC')->get()->take(1);
        $generals = General::orderBy('created_at','DESC')->get()->take(5);

        $gheaders = GHeader::all();
        // dd($gheaders);
        return view('livewire.general-component',["generals"=>$generals,"general"=>$general,"gheaders"=>$gheaders])->layout('layouts.base');
    }
}
