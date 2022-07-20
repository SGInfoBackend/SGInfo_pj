<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use App\Models\JobTypeOfRole;
use Livewire\WithPagination;

class JobComponent extends Component
{
    public $selectedId = [] ;
    public $selectedJob = [] ;

    public $Job_ID;

    public $min_price;
    public $max_price;

    use WithPagination;

    public function mount()
    {
        $this->selectedId = [1];

        $this->min_price= 1;
        $this->max_price= 10000;
    }

    public function render()
    {

        // dd($result);
        // if($this->selectedId){
        //     $jobs = Job::where('Typeofrole_ID',$this->selectedId)->paginate(10);
        // }
        // dd($this->selectedJob);
        // $selectedjob = in_array(true, $this->selectedJob) ;
        // dd($selectedjob);

        // $result = array_fill_keys($this->selectedJob->toArray(), true);
        // dd($result);
        $typeofroles = JobTypeOfRole::all();

        if($this->selectedId)
        {
            $jobs = Job::where('Typeofrole_ID',$this->selectedId)->where('Job_title',$this->selectedJob)->whereBetween('SALARY',[$this->min_price,$this->max_price])->paginate(10);
            // dd($jobs);
        }
        else
        {
            $jobs = Job::orderBy('Job_ID','DESC')->where('Job_title',$this->selectedJob)->whereBetween('SALARY',[$this->min_price,$this->max_price])->paginate(10);
        }

        return view('livewire.job-component', ['jobs'=>$jobs, 'typeofroles'=>$typeofroles])->layout('layouts.base');
    }
}
