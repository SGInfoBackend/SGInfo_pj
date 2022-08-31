<?php

namespace App\Http\Livewire;

use App\Models\General;
use App\Models\GHeader;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class GeneralComponent extends Component
{

    public function render()
    {
        // For Trendings

        $trending = Cache::remember('trending', now()->addMinutes(10), function () {
            return General::where('GHeader_ID', '=', '1')->limit(1)->get();
        });

        $trendings = Cache::remember('trendings', now()->addMinutes(10), function () {
            return General::where('GHeader_ID', '=', '1')->orderBy('General_ID', 'DESC')->limit(5)->get();
        });

        // For Globle News
        $globleNew = Cache::remember('globleNew', now()->addMinutes(10), function () {
            return General::where('GHeader_ID', '=', '2')->limit(1)->get();
        });

        $globleNews = Cache::remember('globleNews', now()->addMinutes(10), function () {
            return General::where('GHeader_ID', '=', '2')->orderBy('General_ID', 'DESC')->limit(4)->get();
        });
        // dd($globleNew);
        $travelGuide = Cache::remember('travelGuide', now()->addMinutes(10), function () {
            return General::where('GHeader_ID', '=', '3')->orderBy('General_ID', 'DESC')->limit(4)->get();
        });

        $healthEducation = Cache::remember('healthEducation', now()->addMinutes(10), function () {
            return General::where('GHeader_ID', '=', '4')->limit(2)->get();
        });

        $present = Cache::remember('present', now()->addMinutes(10), function () {
            return General::where('GHeader_ID', '=', '5')->limit(3)->get();
        });

        $restaurant = Cache::remember('restaurant', now()->addMinutes(10), function () {
            return General::where('GHeader_ID', '=', '6')->limit(1)->get();
        });

        $restaurants = Cache::remember('restaurants', now()->addMinutes(10), function () {
            return General::where('GHeader_ID', '=', '6')->orderBy('General_ID', 'DESC')->limit(2)->get();
        });

        $mostPopular = Cache::remember('mostPopular', now()->addMinutes(10), function () {
            return General::where('GHeader_ID', '=', '7')->limit(6)->get();
        });

        $mustRead = Cache::remember('mustRead', now()->addMinutes(10), function () {
            return General::where('GHeader_ID', '=', '8')->limit(4)->get();
        });
        // dd($mustRead);
        return view('livewire.general-component', [
            "trendings" => $trendings, "trending" => $trending,
            "globleNews" => $globleNews, "globleNew" => $globleNew,
            "travelGuide" => $travelGuide,
            "healthEducation" => $healthEducation,
            "present" => $present,
            "restaurant" => $restaurant, "restaurants" => $restaurants,
            "mostPopular" => $mostPopular,
            "mustRead" => $mustRead,
        ])->layout('layouts.base');
    }
}
