<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GeneralComponent extends Component
{
    public function render()
    {
        return view('livewire.general-component')->layout('layouts.base');
    }
}
