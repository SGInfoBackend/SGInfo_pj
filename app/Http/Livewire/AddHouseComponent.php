<?php

namespace App\Http\Livewire;

use App\Models\RentHouse;
use Carbon\Carbon;
use Livewire\Component;

class AddHouseComponent extends Component
{
    public $project_name;
    public $project_type;
    public $floor_level;
    public $floor_size;
    public $RH_Nearest_MRT_LRT;
    public $RH_MRT_LRT_Line;
    public $address;
    public $developer;
    public $psf;
    public $avaliable_from;
    public $min_price;
    public $max_price;
    public $no_room;
    public $no_birthroom;
    public $no_toilet;
    public $cooking_allow;
    public $description;
    public $house_image;
    public $SorR;
    public $flat_y_n;


    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'project_name' => 'required',
            'project_type' => 'required',
            'floor_level' => 'required',
            'floor_size' => 'required',
            'RH_Nearest_MRT_LRT' => 'required',
            'RH_MRT_LRT_Line' => 'required',
            'address' => 'required',
            'developer' => 'required',
            'psf' => 'required',
            'avaliable_from' => 'required',
            'min_price' => 'required|numeric',
            'max_price' => 'required|numeric',
            'no_room' => 'required|numeric',
            'no_birthroom' => 'required|numeric',
            'no_toilet' => 'required|numeric',
            'cooking_allow' => 'required',
            'description' => 'required',
            'house_image' => 'required',
            'SorR' => 'required',
            'flat_y_n' => 'required',
        ]);
    }

    public function storeHouse()
    {
        $this->validate([
            'project_name' => 'required',
            'project_type' => 'required',
            'floor_level' => 'required',
            'floor_size' => 'required',
            'RH_Nearest_MRT_LRT' => 'required',
            'RH_MRT_LRT_Line' => 'required',
            'address' => 'required',
            'developer' => 'required',
            'psf' => 'required',
            'avaliable_from' => 'required',
            'min_price' => 'required|numeric',
            'max_price' => 'required|numeric',
            'no_room' => 'required|numeric',
            'no_birthroom' => 'required|numeric',
            'no_toilet' => 'required|numeric',
            'cooking_allow' => 'required',
            'description' => 'required',
            'house_image' => 'required',
            'SorR' => 'required',
            'flat_y_n' => 'required',
        ]);

        $rent_house = new RentHouse();

        $rent_house->PROJECT_NAME = $this->project_name;
        $rent_house->Project_type = $this->project_type;
        $rent_house->Floor_lvl = $this->projefloor_levelct_name;
        $rent_house->Floor_Size = $this->floor_size;
        $rent_house->RH_Nearest_MRT_LRT = $this->RH_Nearest_MRT_LRT;
        $rent_house->RH_MRT_LRT_Line = $this->RH_MRT_LRT_Line;
        $rent_house->ADDRESS = $this->address;
        $rent_house->DEVELOPER = $this->developer;
        $rent_house->PSF = $this->psf;
        $rent_house->Avaliable_From = $this->avaliable_from;
        $rent_house->PRICE_MIN = $this->min_price;
        $rent_house->PRICE_MAX = $this->max_price;
        $rent_house->No_Room = $this->no_room;
        $rent_house->No_Birthroom = $this->no_birthroom;
        $rent_house->No_Toilet = $this->no_toilet;
        $rent_house->Cooking_Allow = $this->cooking_allow;
        $rent_house->RH_Description = $this->description;
        $image = Carbon::now()->timestamp. '.' .$this->house_image->extension();
        $this->house_image->storeAs('room_images', $image);
        $rent_house->RH_PHOTO = $image;
        $rent_house->SorR = $this->SorR;
        $rent_house->Flat_Y_N = $this->flat_y_n;
        $rent_house->save();
        session()->flash('success_message', 'Rent House Data has been added successfully!');
    }

    public function render()
    {
        return view('livewire.add-house-component')->layout('layouts.base');
    }
}
