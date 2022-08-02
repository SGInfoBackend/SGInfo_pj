<?php

namespace App\Http\Livewire;

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
    public $salary;
    public $job_location;
    public $job_category;
    public $company_url_link;
    public $exp_level;
    public $job_description;
    public $job_type_role;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            // 'job_title' => [
            //     'required',
            //     new PropertyName()
            // ],
            'job_title' => 'required',
            'company' => 'required',
            'salary' => 'required|numeric',
            'job_location' => 'required',
            'job_category' => 'required',
            'company_url_link' => 'required',
            'exp_level' => 'required',
            'job_description' => 'required',
            'job_type_role' => 'required',
        ]);
    }

    public function storeJob()
    {
        if(!Auth::check())
        {
            $this->dispatchBrowserEvent('show_modal');
        }

        $this->validate([
            // 'job_title' => [
            //     'required',
            //     new PropertyName()
            // ],
            'job_title' => 'required',
            'company' => 'required',
            'salary' => 'required|numeric',
            'job_location' => 'required',
            'job_category' => 'required',
            'company_url_link' => 'required',
            'exp_level' => 'required',
            'job_description' => 'required',
            'job_type_role' => 'required',
        ]);

        $jobs = new Job();
        $jobs->Job_title = $this->job_title;
        dd($jobs->Job_title);
        $jobs->Company = $this->company;
        $jobs->SALARY = $this->salary;
        $jobs->Job_location = $this->job_location;
        $jobs->Category_job = $this->job_category;
        $jobs->Company_URL = $this->company_url_link;
        $jobs->exp_level = $this->exp_level;
        $jobs->Job_Description = $this->job_description;
        $jobs->Typeofrole_ID = $this->job_type_role;
        $jobs->save();

        session()->flash('success_message', 'Job Information has been added successfully!');
        $this->dispatchBrowserEvent('hide_form');
    }

    public function render()
    {

        $typeofroles = JobTypeOfRole::all();
        return view('livewire.add-job-component', ['typeofroles'=>$typeofroles])->layout('layouts.base');
    }
}
