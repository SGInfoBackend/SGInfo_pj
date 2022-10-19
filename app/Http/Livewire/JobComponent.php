<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use App\Models\JobTypeOfRole;
use Illuminate\Support\Facades\Cache;
use Livewire\WithPagination;

class JobComponent extends Component
{
    public $selectedId = [];
    public $selectedJob = [];
    public $expLevel = [];

    public $min_price;
    public $max_price;

    use WithPagination;

    public function mount()
    {
        $this->selectedId = [1];
        $this->selectedJob = [1];
        $this->expLevel = [1];
        $this->min_price = 1;
        $this->max_price = 10000;
    }

    public function render()
    {
        $typeofroles = Cache::remember('typeofroles', now()->addMinutes(10), function () {
            return JobTypeOfRole::get();
        });

        $jobs = Cache::remember('show_jobs', now()->addMinutes(10), function () {
            return Job::all();
        });

        if (Cache::has('show_jobs')) {
            if ($this->selectedId) {
                $jobs = Job::whereIn('Typeofrole_ID', $this->selectedId)->orWhereIn('Job_title', $this->selectedJob)->orWhereIn('exp_level', $this->expLevel)->whereBetween('SALARY', [$this->min_price, $this->max_price])->paginate(8);
            } else {
                $jobs = Job::orderBy('Job_ID', 'DESC')->orwhereIn('Job_title', $this->selectedJob)->orWhereIn('exp_level', $this->expLevel)->whereBetween('SALARY', [$this->min_price, $this->max_price])->paginate(8);
            }
        }
        return view('livewire.job-component', [
            'jobs' => $jobs,
            'typeofroles' => $typeofroles
        ])->layout('layouts.base');
    }
}
