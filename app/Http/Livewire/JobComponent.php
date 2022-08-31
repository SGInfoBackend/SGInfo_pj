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
    // public function index()
    // {
    //     $value = Cache::get('key'); // obtaining a cache instance
    //     $value = Cache::get('key', 'default');
    //     $value = Cache::store('file')->get('foo');
    //     Cache::store('redis')->put('bar', 'baz', 600);
    //     $value = Cache::get('key', function() {
    //         return DB::table(/* ... */)->get();
    //     });
    //     Cache::increment('key');
    //     Cache::decrement('key', $amount);
    //     Cache::decrement('key');
    //     Cache::increment('key', $amount);

    //     // Retrieve & store
    //     $value = Cache::remember('users', 'seconds', function() {
    //         return DB::table('users')->get();
    //     });
    //     $value = Cache::pull('key'); // Retrieve & delete
    //     $value = Cache::put('key', 'value', $seconds = 10); // Storing items in the cache
    //     $value = Cache::put('key', 'value', now()->addMinutes(10));
    //     $value = Cache::add('key', 'value', $seconds);  // Store if Not present
    //     Cache::forget('key'); // Removing items from the cache
    //     Cache::flush(); // remove entire cache
    //     $value = cache('key');
    //     cache(['key' => 'value'], $seconds);
    //     cache(['key' => 'value'], now()->addMinutes(10));
    //     cache()->remember('users', $seconds, function() {
    //         return DB::table('users')->get();
    //     });
    //     $john = Cache::tags(['people', 'artists'])->get('John');
    //     Cache::tags('people', 'authors')->flush();// Removing tagged cache items
    // }

    public function render()
    {
        $typeofroles = Cache::remember('typeofroles', now()->addMinutes(10), function() {
            return JobTypeOfRole::get();
        });

        $jobs = Cache::remember('show_jobs', now()->addMinutes(10), function() {
            return Job::all();
        });

        if ($this->selectedId) {
            $jobs = Job::whereIn('Typeofrole_ID', $this->selectedId)->orWhereIn('Job_title', $this->selectedJob)->orWhereIn('exp_level', $this->expLevel)->whereBetween('SALARY', [$this->min_price, $this->max_price])->paginate(8);
            // $jobs = Cache::remember('jobs', now()->addMinutes(20), function() {
            //     return Job::whereIn('Typeofrole_ID', $this->selectedId)->orWhereIn('Job_title', $this->selectedJob)->orWhereIn('exp_level', $this->expLevel)->whereBetween('SALARY', [$this->min_price, $this->max_price])->paginate(8);
            // });
            // dd(Cache::get('jobs'));
            // dd($jobs);
        } else {
            $jobs = Job::orderBy('Job_ID', 'DESC')->orwhereIn('Job_title', $this->selectedJob)->whereBetween('SALARY', [$this->min_price, $this->max_price])->paginate(8);
            // $jobs = Cache::remember('jobs', now()->addMinutes(20), function() {
            //     return Job::orderBy('Job_ID', 'DESC')->orwhereIn('Job_title', $this->selectedJob)->whereBetween('SALARY', [$this->min_price, $this->max_price])->paginate(8);
            // });
        }

        // if($this->selectedId)
        // {
        //     $jobs = Job::where('Typeofrole_ID',$this->selectedId)->where('Job_title', $this->selectedJob)->where('exp_level', $this->expLevel)->whereBetween('SALARY',[$this->min_price,$this->max_price])->paginate(10);
        // }
        // else
        // {
        //     $jobs = Job::orderBy('Job_ID','DESC')->where('Job_title',$this->selectedJob)->whereBetween('SALARY',[$this->min_price,$this->max_price])->paginate(10);
        // }

        return view('livewire.job-component', [
            'jobs' => $jobs,
            'typeofroles' => $typeofroles
        ])->layout('layouts.base');
    }
}
