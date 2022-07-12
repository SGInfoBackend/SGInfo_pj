<?php

namespace App\Http\Livewire;

use App\Models\RentHouse;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddRoomComponent extends Component
{
    use WithFileUploads;
    public $project_name;
    public $project_type;
    public $floor_lv;
    public $floor_size;
    public $mrt_line;
    public $mrt_near;
    public $address;
    public $developer;
    public $psf;
    public $availability;
    public $sor;
    public $price;
    public $no_room;
    public $no_birth;
    public $no_toilet;
    public $images;
    public $description;
    public $keyfeatures=[];
    public $facilities=[];
    public $nearBy;

    public function updated($fileds)
    {
        $this->validateOnly($fileds,[
            'project_name' => 'required',
            'project_type' => 'required',
            'floor_lv' => 'required',
            'floor_size' => 'required',
            'mrt_line' => 'required',
            'mrt_near' => 'required',
            'address' => 'required',
            'developer' => 'required',
            'psf' => 'required',
            'availability' => 'required',
            'sor' => 'required',
            'price' => 'required|numeric',
            'no_room' => 'required|numeric',
            'no_birth' => 'required|numeric',
            'no_toilet' => 'required|numeric',
            'images' => 'image|max:1024',
            'description' => 'required',
            'keyfeatures' => 'required',
            'facilities' => 'required',
            'nearBy' => 'required',
        ]);
    }

    public function store()
    {
        $this->validate([
            'project_name' => 'required',
            'project_type' => 'required',
            'floor_lv' => 'required',
            'floor_size' => 'required',
            'mrt_line' => 'required',
            'mrt_near' => 'required',
            'address' => 'required',
            'developer' => 'required',
            'psf' => 'required',
            'availability' => 'required',
            'sor' => 'required',
            'price' => 'required|numeric',
            'no_room' => 'required|numeric',
            'no_birth' => 'required|numeric',
            'no_toilet' => 'required|numeric',
            'images' => 'image|max:1024',
            'description' => 'required',
            'keyfeatures' => 'required',
            'facilities' => 'required',
            'nearBy' => 'required',
        ]);

        $rent_house = new RentHouse();
        $rent_house->PROJECT_NAME = $this->project_name;
        $rent_house->Project_type = $this->project_type;
        $rent_house->Floor_lvl = $this->floor_lv;
        $rent_house->Floor_Size = $this->floor_size;
        $rent_house->RH_MRT_LRT_Line = $this->mrt_line;
        $rent_house->RH_Nearest_MRT_LRT = $this->mrt_near;
        $rent_house->ADDRESS = $this->address;
        $rent_house->DEVELOPER = $this->developer;
        $rent_house->PSF = $this->psf;
        $rent_house->Avaliable_From = $this->availability;
        $rent_house->SorR = $this->sor;
        $rent_house->PRICE_MAX = $this->price;
        $rent_house->No_Room = $this->no_room;
        $rent_house->No_Birthroom = $this->no_birth;
        $rent_house->No_Toilet = $this->no_toilet;

        if($this->images)
        {
            $imagesname = '';
            foreach($this->images as $key=>$image)
            {
                $imgName = Carbon::now()->timestamp. $key . '_' .$image->extension();
                $image->storeAs('room_image', $imgName);
                $imagesname = $imagesname . ',' .$imgName;
            }
            $rent_house->RH_PHOTO = $imagesname;
        }

        $rent_house->RH_Description = $this->description;
        $rent_house->KeyFeature_IDS = $this->keyfeatures;
        $rent_house->Facilities_IDS = $this->facilities;
        $rent_house->NearBy_IDS = $this->nearBy;

        $rent_house->save();
        session()->flash('success_message','House information has been created successfullly');
    }


    public function render()
    {
        return view('livewire.add-room-component')->layout('layouts.base');
    }
}
