<?php

namespace App\Http\Livewire;

use App\Http\Requests\AddJobRequest;
use App\Models\Job;
use App\Models\JobTypeOfRole;
use App\Rules\PropertyName;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddJobComponent extends Component
{
    // add job
    public $job_title;
    public $company;
    public $company_url_link;
    public $job_type_role;
    public $salary;
    public $job_location;
    public $exp_level;
    public $job_description;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'job_title' => 'required',
            'company' => 'required',
            'company_url_link' => 'required',
            'job_type_role' => 'required',
            'salary' => 'required|numeric',
            'job_location' => 'required',
            'exp_level' => 'required',
            'job_description' => 'required',
        ]);
    }

    public function storeJob()
    {
        if(!Auth::check())
        {
            $this->dispatchBrowserEvent('show_modal');
        }

        $this->validate([
            'job_title' => 'required',
            'company' => 'required',
            'company_url_link' => 'required',
            'job_type_role' => 'required',
            'salary' => 'required|numeric',
            'job_location' => 'required',
            'exp_level' => 'required',
            'job_description' => 'required',
        ]);

        $jobs = new Job();
        $jobs->USER_ID = Auth::user()->id;
        $jobs->Job_title = $this->job_title;
        $jobs->Company = $this->company;
        $jobs->Company_URL = $this->company_url_link;
        $jobs->Typeofrole_ID = $this->job_type_role;
        $jobs->SALARY = $this->salary;
        $jobs->Job_location = $this->job_location;
        $jobs->exp_level = $this->exp_level;
        $jobs->Job_Description = $this->job_description;
        $jobs->save();

        session()->flash('message', 'Job Information has been added successfully!');
        $this->dispatchBrowserEvent('hide_modal');
    }

    public function render()
    {

        $typeofroles = JobTypeOfRole::all();
        return view('livewire.add-job-component', ['typeofroles'=>$typeofroles])->layout('layouts.base');
    }
}
