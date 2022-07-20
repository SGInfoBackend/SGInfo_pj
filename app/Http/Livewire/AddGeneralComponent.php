<?php

namespace App\Http\Livewire;

use App\Models\General;
use App\Models\GHeader;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddGeneralComponent extends Component
{
    use WithFileUploads;

    // public $user_id;
    public $gname;
    public $gtitle;
    public $gheader_id;
    public $gphotos;
    public $gdescription;

    public function updated($fields){

        $this->validateOnly($fields,[
            'gname' => 'required',
            'gtitle' => 'required',
            'gheader_id' => 'required',
            'gphotos' => 'image|max:1024',
            'gdescription' => 'required',
        ]);

    }

    public function addArtical()
    {
            $this->validate([
                'gname' => 'required',
                'gtitle' => 'required',
                'gheader_id' => 'required',
                'gphotos' => 'image|max:1024',
                'gdescription' => 'required',
            ]);

            $artical = new General();

            $artical->USER_ID  = Auth::user()->id;
            $artical->G_Name = $this->gname;
            $artical->G_Title = $this->gtitle;
            $artical->GHeader_ID = $this->gheader_id;

            $imageName = Carbon::now()->timestamp. '.' . $this->gphotos->extension();
            $this->gphotos->storeAs('general_images',$imageName);
            $artical->G_PHOTO = $imageName;

            $artical->G_Description  = $this->gdescription;

            $artical->save();

            session()->flash('message','Article has been created successfully!');
            $this->dispatchBrowserEvent('hide_modal');

    }
    // add general
    public function render()
    {
        $generals = General::all();
        $gheaders = GHeader::all();
        return view('livewire.add-general-component',["gheaders"=>$gheaders,"generals"=>$generals])->layout('layouts.base');
    }
}
