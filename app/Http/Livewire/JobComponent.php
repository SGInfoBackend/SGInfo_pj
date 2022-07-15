<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use App\Models\JobTypeOfRole;
use Livewire\WithPagination;

class JobComponent extends Component
{
    public $selectedId = [] ;

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
        // $result = array_keys(array_filter($this->selectedId));
        // dd($result);
        // if($this->selectedId){
        //     $jobs = Job::where('Typeofrole_ID',$this->selectedId)->paginate(10);
        // }

        $typeofroles = JobTypeOfRole::all();

        if($this->selectedId)
        {
            $jobs = Job::where('Typeofrole_ID',$this->selectedId)->whereBetween('SALARY',[$this->min_price,$this->max_price])->paginate(10);
            // dd($jobs);
        }
        else
        {
            $jobs = Job::orderBy('Job_ID','DESC')->whereBetween('SALARY',[$this->min_price,$this->max_price])->paginate(10);
        }
        // dd($jobs);
        // if($this->sorting=='slider'){
        //     $products = Job::whereBetween('SALARY',[$this->min_price,$this->max_price])-> orderBy('created_at','DESC')->paginate($this->pagesize);
        // }

        return view('livewire.job-component',['jobs'=>$jobs, 'typeofroles'=>$typeofroles])->layout('layouts.base');
    }
}
