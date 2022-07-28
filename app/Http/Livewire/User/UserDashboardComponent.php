<?php

namespace App\Http\Livewire\User;

use App\Models\General;
use App\Models\Job;
use App\Models\RentHouse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboardComponent extends Component
{
    public function render()
    {
        $rooms = RentHouse::where('user_id',Auth::user()->id)->get()->count();
        $job = Job::where('user_id',Auth::user()->id)->get()->count();
        $lnews = General::where('GHeader_ID','=','1')->where('user_id',Auth::user()->id)->get()->count();
        $Gnews = General::where('GHeader_ID','=','2')->where('user_id',Auth::user()->id)->get()->count();
        $jobs = Job::orderBy('created_at','DESC')->where('user_id',Auth::user()->id)->get();
        // dd($jobs);
        return view('livewire.user.user-dashboard-component',[
            "rooms" => $rooms,
            "jobs" => $jobs,
            "lnews" => $lnews,
            "Gnews" => $Gnews,
            "job" => $job,
        ])->layout('layouts.base');
    }
}
