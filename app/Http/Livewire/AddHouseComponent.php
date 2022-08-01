<?php

namespace App\Http\Livewire;

use App\Http\Requests\RentHouseValidationRequest;
use Livewire\WithFileUploads;
use App\Models\RentHouse;
use App\Rules\DateValidation;
use App\Rules\PropertyName;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Event;

class AddHouseComponent extends Component
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
    public $ros;
    public $images;
    public $description;
    public $keyfeatures=[];
    public $facilities=[];
    public $currency;

    public function updated($fileds)
    {
        $this->validateOnly($fileds,[
            'project_type' => 'required',
            'availability' => 'required',
            'developer' => 'required',
            'floor_lv' => 'required',
            'floor_size' => 'required',
            'psf' => 'required',
            'mrt_near' => 'required',
            'address' => 'required',
            'ros' => 'required',
            'price' => 'required|numeric',
            'images' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
            'no_room' => 'required|numeric',
            'no_birth' => 'required|numeric',
            'keyfeatures' => 'required',
            'facilities' => 'required',
            'description' => 'required',
        ]);
    }

    public function store()
    {
        if(!Auth::check())
        {
            $this->dispatchBrowserEvent('show_modal');
        }
        // $request->all();
        $this->validate([
            'project_type' => [
                'required',
                new PropertyName()
            ],
            'availability' => [
                'required',
                new DateValidation()
            ],
            'developer' => 'required',
            'floor_lv' => 'required',
            'floor_size' => 'required',
            'psf' => 'required',
            'mrt_near' => 'required',
            'address' => 'required',
            'ros' => 'required',
            'price' => 'required|numeric',
            'images' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
            'no_room' => 'required|numeric',
            'no_birth' => 'required|numeric',
            'keyfeatures' => 'required',
            'facilities' => 'required',
            'description' => 'required',
        ]);

        $rent_house = new RentHouse();
        $rent_house->Project_type = $this->project_type;
        $rent_house->Floor_lvl = $this->floor_lv;
        $rent_house->Floor_Size = $this->floor_size;
        $rent_house->RH_Nearest_MRT_LRT = $this->mrt_near;
        $rent_house->ADDRESS = $this->address;
        $rent_house->DEVELOPER = $this->developer;
        $rent_house->PSF = $this->psf;
        $rent_house->Avaliable_From = $this->availability;
        $rent_house->SorR = $this->sor;
        $rent_house->PRICE_MAX = $this->price. ' ' .$this->currency;
        $rent_house->No_Room = $this->no_room;
        $rent_house->No_Birthroom = $this->no_birth;

        $imageName = Carbon::now()->timestamp. '.'. $this->images->extension();
        $this->images->storeAs('room_list', $imageName);
        $rent_house->RH_PHOTO = $imageName;

        $arr_1 = implode(',', $this->keyfeatures);
        $arr_2 = implode(',', $this->facilities);

        $rent_house->USER_ID = Auth::user()->id;

        $rent_house->RH_Description = $this->description;
        $rent_house->KeyFeature_IDS = $arr_1;
        $rent_house->Facilities_IDS = $arr_2;
        $rent_house->save();
        session()->flash('success_message','House information has been created successfullly');
        $this->dispatchBrowserEvent('hide_modal');

    }
    public function render()
    {
        return view('livewire.add-house-component')->layout('layouts.base');
    }
}
