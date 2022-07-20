<?php

namespace App\Http\Livewire;

use App\Models\General;
use App\Models\GHeader;
use App\Models\Job;
use App\Models\RentHouse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    public $job_title;
    public $location;
    public $search;

    public function render()
    {
        $search_job_title = '%'. $this->job_title. '%';
        $search = '%'. $this->search. '%';
        // $search_job_location = '%'. $this->location. '%';
        $rentHouses = RentHouse::orderBy('Rent_House_ID', 'DESC')->paginate(4);
        $searchJob = Job::where('Job_title',$search)->orWhere('Job_location',$search)->orWhere('Company',$search)->get();
        $jobs = Job::where('Job_title', 'LIKE', $search_job_title)
                    ->paginate(5);
        $allJobs = Job::all();
        // For Trendings
        $trending = General::where('GHeader_ID','=','1')->limit(1)->get();
        $trendings = General::where('GHeader_ID','=','1')->orderBy('General_ID','DESC')->limit(5)->get();
        // For Travelguide
        $travelGuide = General::where('GHeader_ID','=','3')->orderBy('General_ID','DESC')->take(1)->get();
        // dd($travelGuide);

        $gheaders = GHeader::all();

        return view('livewire.home-component',[
            'jobs' => $jobs,
            'rentHouses' => $rentHouses,
            'allJobs' => $allJobs,
            'trending' => $trending,
            'trendings' => $trendings,
            'travelGuide' => $travelGuide,
            'searchJobs' => $searchJob,
            'gheaders' => $gheaders,
        ])->layout('layouts.base');
    }
}
