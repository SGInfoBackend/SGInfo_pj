<?php

namespace App\Http\Livewire;

use App\Models\General;
use App\Models\GHeader;
use App\Models\Job;
use App\Models\RentHouse;
use Livewire\Component;

class HomeComponent extends Component
{
    public $job_title;
    public $location;

    public function render()
    {

        $allJobs = Job::all();

        $search_job_title = '%'. $this->job_title. '%';
        $search_job_location = '%'. $this->location. '%';
        $rentHouses = RentHouse::orderBy('Rent_House_ID', 'DESC')->paginate(4);
        $jobs = Job::where('Job_title', 'LIKE', $search_job_title)
                    ->orWhere('Job_location', 'LIKE',$search_job_location )
                    ->paginate(10);
        $general = General::orderBy('created_at','DESC')->get()->take(1);
        $generals = General::orderBy('created_at','DESC')->get()->take(5);

        $gheaders = GHeader::all();

        return view('livewire.home-component',[
            'allJobs' => $allJobs,
            'jobs' => $jobs,
            'rentHouses' => $rentHouses,
            'general' => $general,
            'generals' => $generals,
            'gheaders' => $gheaders,
        ])->layout('layouts.base');
    }
}
