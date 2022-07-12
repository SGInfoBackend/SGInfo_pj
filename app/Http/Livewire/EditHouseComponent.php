<?php

namespace App\Http\Livewire;

use App\Models\RentHouse;
use Livewire\Component;

class EditHouseComponent extends Component
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

    public function mount($Rent_House_ID )
    {
        $rent_house = RentHouse::find('Rent_House_ID', $Rent_House_ID);

        $this->project_name = $rent_house->PROJECT_NAME;
        $this->project_type = $rent_house->Project_type;
        $this->projefloor_levelct_name = $rent_house->Floor_lvl;
        $this->floor_size = $rent_house->Floor_Size;
        $this->RH_Nearest_MRT_LRT = $rent_house->RH_Nearest_MRT_LRT;
        $this->RH_MRT_LRT_Line = $rent_house->RH_MRT_LRT_Line;
        $this->address = $rent_house->ADDRESS;
        $this->developer = $rent_house->DEVELOPER;
        $this->psf = $rent_house->PSF;
        $this->avaliable_from = $rent_house->Avaliable_From;
        $this->min_price = $rent_house->PRICE_MIN;
        $this->max_price = $rent_house->PRICE_MAX;
        $this->no_room = $rent_house->No_Room;
        $this->no_birthroom = $rent_house->No_Birthroom;
        $this->no_toilet = $rent_house->No_Toilet;
        $this->cooking_allow = $rent_house->Cooking_Allow;
        $this->description = $rent_house->RH_Description;
        $this->house_image = $rent_house->RH_PHOTO;
        $this->SorR = $rent_house->SorR;
        $this->flat_y_n = $rent_house->Flat_Y_N;
    }

    public function update()
    {

    }

    public function render()
    {
        return view('livewire.edit-house-component')->layout('layouts.base');
    }
}
