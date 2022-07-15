<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use App\Models\JobTypeOfRole;
use Livewire\WithPagination;

class JobComponent extends Component
{
    // public $check1;
    // public $check2;
    // public $check3;
    // public $check;
    // public $selected = [""];
    public $show = false;

    // public $jobtitle1;
    // public $jobtitle2;
    // public $jobtitle3;
    // public $jobtitle4;
    // public $jobtitle5;
    // public $jobtitle6;
    // public $jobtitle7;
    // public $jobtitle8;
    // public $jobtitle9;

    // public function mount($Typeofrole_ID)
    // {
    //     $this->selected = $this->$Typeofrole_ID;
    // }


    use WithPagination;
    public function render()
    {
        // $typeofroles = JobTypeOfRole::all();

        // $result = array_keys(array_filter($this->selected));

        // Job::where('Typeofrole_ID', $this->selected)
        // $jobs = Job::when(count(array_filter($this->selected)), function($query) {return $query->whereIn('Typeofrole_ID', $this->selected);})->orderBy('Job_ID','DESC')->paginate(8);
                // ->orWhere('Typeofrole_ID', $this->check2)
                // ->orWhere('Typeofrole_ID', $this->check3)
                // ->orWhere('Job_title', $this->jobtitle1)
                // ->orWhere('Job_title', $this->jobtitle2)
                // ->orWhere('Job_title', $this->jobtitle3)
                // ->orWhere('Job_title', $this->jobtitle4)
                // ->orWhere('Job_title', $this->jobtitle5)
                // ->orWhere('Job_title', $this->jobtitle6)
                // ->orWhere('Job_title', $this->jobtitle7)
                // ->orWhere('Job_title', $this->jobtitle8)
                // ->orWhere('Job_title', $this->jobtitle9)
                // dd($jobs);

        return view('livewire.job-component')->layout('layouts.base');
    }
}
