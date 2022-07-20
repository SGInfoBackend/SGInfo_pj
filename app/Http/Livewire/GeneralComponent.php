<?php

namespace App\Http\Livewire;

use App\Models\General;
use App\Models\GHeader;
use Livewire\Component;

class GeneralComponent extends Component
{

    public function render()
    {
        // For Trendings
        $trending = General::where('GHeader_ID','=','1')->limit(1)->get();
        $trendings = General::where('GHeader_ID','=','1')->orderBy('General_ID','DESC')->limit(5)->get();
        // For Globle News
        $globleNew = General::where('GHeader_ID','=','2')->limit(1)->get();
        $globleNews = General::where('GHeader_ID','=','2')->orderBy('General_ID','DESC')->limit(4)->get();

        // dd($globleNew);
        $travelGuide = General::where('GHeader_ID','=','3')->orderBy('General_ID','DESC')->limit(1)->get();

        $healthEducation = General::where('GHeader_ID','=','4')->limit(2)->get();

        $present = General::where('GHeader_ID','=','5')->limit(3)->get();

        $restaurant = General::where('GHeader_ID','=','6')->limit(1)->get();
        $restaurants = General::where('GHeader_ID','=','6')->orderBy('General_ID','DESC')->limit(2)->get();

        $mostPopular = General::where('GHeader_ID','=','7')->limit(6)->get();

        $mustRead = General::where('GHeader_ID','=','8')->limit(4)->get();

        // dd($mustRead);
        return view('livewire.general-component',[
            "trendings"=>$trendings,"trending"=>$trending,
            "globleNews"=>$globleNews,"globleNew"=>$globleNew,
            "travelGuide"=>$travelGuide,
            "healthEducation"=>$healthEducation,
            "present"=>$present,
            "restaurant"=>$restaurant,"restaurants"=>$restaurants,
            "mostPopular"=>$mostPopular,
            "mustRead"=>$mustRead,
            ])->layout('layouts.base');
    }
}
