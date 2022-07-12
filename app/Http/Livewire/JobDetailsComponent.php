<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class JobDetailsComponent extends Component
{
    // Job Details
    public $job_ID;
    public function mount($Job_ID)
    {
        $this->job_ID = $Job_ID;
    }


    public function render()
    {
        $jobdetails = Job::where('Job_ID', $this->job_ID)->first();
        // dd($jobdetails->Job_title);
        $similarjobs = Job::where('Job_title', $jobdetails->Job_title)->get();
        // dd($similarjobs);
        return view('livewire.job-details-component', ['jobdetails' => $jobdetails, 'similarjobs' => $similarjobs])->layout('layouts.base');
    }
}
