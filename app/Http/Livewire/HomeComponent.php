<?php

namespace App\Http\Livewire;

use App\Models\Job;
use App\Models\RentHouse;
use Livewire\Component;

class HomeComponent extends Component
{
    public $job_title;
    public $location;

    public function render()
    {
        $search_job_title = '%'. $this->job_title. '%';
        $search_job_location = '%'. $this->location. '%';
        $rentHouses = RentHouse::paginate(4);
        $jobs = Job::where('Job_title', 'LIKE', $search_job_title)
                    ->orWhere('Job_location', 'LIKE',$search_job_title )
                    ->paginate(5);
        $allJobs = Job::all();
        return view('livewire.home-component',[
            'jobs' => $jobs,
            'rentHouses' => $rentHouses,
            'allJobs' => $allJobs,

        ])->layout('layouts.base');
    }
}
