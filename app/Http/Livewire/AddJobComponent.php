<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class AddJobComponent extends Component
{
    // add job
    public $job_title;
    public $company;
    public $salary;
    public $job_location;
    public $job_category;
    public $company_url_link;
    public $job_description;
    public $job_type_role;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'job_title' => 'required',
            'company' => 'required',
            'salary' => 'required|numeric',
            'job_location' => 'required',
            'job_category' => 'required',
            'company_url_link' => 'required',
            'job_description' => 'required',
            'job_type_role' => 'required',
        ]);
    }

    public function storeJob()
    {
        $this->validate([
            'job_title' => 'required',
            'company' => 'required',
            'salary' => 'required|numeric',
            'job_location' => 'required',
            'job_category' => 'required',
            'company_url_link' => 'required',
            'job_description' => 'required',
            'job_type_role' => 'required',
        ]);


        $job = new Job();
        $job->Job_title = $this->job_title;
        $job->Typeofrole_ID = $this->job_type_role;
        $job->Company = $this->company;
        $job->SALARY = $this->salary;
        $job->Job_location = $this->job_location;
        $job->Category_job = $this->job_category;
        $job->Company_URL = $this->company_url_link;
        $job->Job_Description = $this->job_description;
        $job->save();
        session()->flash('success_message', 'Job Information has been added successfully!');
    }

    public function render()
    {
        return view('livewire.add-job-component')->layout('layouts.base');
    }
}
