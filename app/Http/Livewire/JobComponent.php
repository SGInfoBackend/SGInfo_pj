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
    public $selected ;
    // public $selected = [
    //     0 => "Full Time",
    //     1 => "Part Time",
    //     2 => "All FURY",
    // ];

    public $min_price;
    public $max_price;

    // public function mount()
    // {
    //     $this->min_price = 1;
    //     $this->max_price = 1000;
    // }

    // public function mount($Typeofrole_ID)
    // {
    //     $this->selected = $Typeofrole_ID;
    // }


    use WithPagination;
    public function render()
    {
        $typeofroles = JobTypeOfRole::all();

        // $result = array_keys(array_filter($this->selected));

        // Job::where('Typeofrole_ID', $this->selected)
        $jobs = Job::where('Typeofrole_ID', $this->selected)
                    ->orWhere()->get();
                // ->orWhere('Typeofrole_ID', $this->check2)
                // dd($jobs);

        return view('livewire.job-component',['jobs'=>$jobs, 'typeofroles'=>$typeofroles])->layout('layouts.base');
    }
}
