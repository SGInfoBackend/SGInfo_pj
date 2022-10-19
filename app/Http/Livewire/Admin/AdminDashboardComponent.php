<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\General;
use App\Models\Job;
use App\Models\RentHouse;
use Illuminate\Support\Facades\Auth;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $rooms = RentHouse::where('user_id', Auth::user()->id)->get()->count();
        $job = Job::where('user_id', Auth::user()->id)->get()->count();
        $lnews = General::where('GHeader_ID', '=', '1')->where('user_id', Auth::user()->id)->get()->count();
        $Gnews = General::where('GHeader_ID', '=', '2')->where('user_id', Auth::user()->id)->get()->count();
        $jobs = Job::orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->get();
        return view('livewire.admin.admin-dashboard-component', [
            "rooms" => $rooms,
            "jobs" => $jobs,
            "lnews" => $lnews,
            "Gnews" => $Gnews,
            "job" => $job,
        ])->layout('layouts.base');
    }
}
