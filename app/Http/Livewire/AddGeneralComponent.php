<?php

namespace App\Http\Livewire;

use App\Models\General;
use App\Models\GHeader;
use Carbon\Carbon;
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
        // dd('GG');
        $this->validate([
            'gname' => 'required',
            'gtitle' => 'required',
            'gheader_id' => 'required',
            'gphotos' => 'image|max:1024',
            'gdescription' => 'required',
        ]);

        $artical = new General();
        // dd($artical);
        // $artical->USER_ID  = $this->user_id;
        $artical->G_Name = $this->gname;
        $artical->G_Title = $this->gtitle;
        $artical->GHeader_ID = $this->gheader_id;

        $imageName = Carbon::now()->timestamp. '.' . $this->gphotos->extension();
        $this->gphotos->storeAs('general_images',$imageName);
        $artical->G_PHOTO = $imageName;
        // dd($artical->G_PHOTO);

        // $imgName = Carbon::now()->timestamp. $key. '.' .$gphotos->extension();
        // // dd($imgName);
        // $gphoto->storeAs('general_images',$imgName);
        // $imagesname = $imagesname . ',' .$imgName;
        // dd($imagesname);
            // $artical->G_PHOTO = $imagesname;
            // dd($artical->G_PHOTO );

        // dd($artical->G_PHOTO);

        $artical->G_Description  = $this->gdescription;

        $artical->save();

        session()->flash('message','Article has been created successfully!');

        // return redirect()->to('/general');

    }
    // add general
    public function render()
    {
        $generals = General::all();
        $gheaders = GHeader::all();
        return view('livewire.add-general-component',["gheaders"=>$gheaders,"generals"=>$generals])->layout('layouts.base');
    }
}
