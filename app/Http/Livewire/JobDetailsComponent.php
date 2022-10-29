<?php

namespace App\Http\Livewire;

use App\Models\Job;
use App\Models\JobTypeOfRole;
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
        $rolename = JobTypeOfRole::where('Typeofrole_ID', $jobdetails->Typeofrole_ID)->first();
        $similarjobs = Job::where('Job_title', $jobdetails->Job_title)->get();
        return view('livewire.job-details-component', [
            'jobdetails' => $jobdetails,
            'similarjobs' => $similarjobs,
            'rolename' => $rolename
        ])->layout('layouts.base');
    }
}
