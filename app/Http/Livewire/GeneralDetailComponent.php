<?php

namespace App\Http\Livewire;

use App\Models\General;
use App\Models\GHeader;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class GeneralDetailComponent extends Component
{
    public $General_ID;

    public function mount($General_ID)
    {
        $this->General_ID = $General_ID ;
    }
    public function render()
    {
        $generals = Cache::remember("generals",60,function(){
            return General::where('General_ID',$this->General_ID)->first();
        });
        

        return view('livewire.general-detail-component',["general"=>$generals])->layout('layouts.base');
    }
}
