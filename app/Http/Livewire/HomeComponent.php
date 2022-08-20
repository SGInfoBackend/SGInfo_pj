<?php

namespace App\Http\Livewire;

use App\Models\General;
use App\Models\GHeader;
use App\Models\Job;
use App\Models\RentHouse;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    use WithPagination;
    public $alljobs;
    public $job_title;
    public $job_location;
    public $searchTerm = null;
    protected $queryString = ['searchTerm' => ['except' => '']];

    public function updatedSearchTerm()
    {
        $this->resetPage();
    }

    public function render()
    {
        sleep(1);
        // $search = '%'. $this->searchTerm. '%';
        // $searchJob = Job::where('Job_location',$search)->get();
        $rentHouses = RentHouse::orderBy('Rent_House_ID', 'DESC')->paginate(4);

        if($this->searchTerm)
        {
            $jobs = Job::where(function($query) {
                $query->where('Job_title', 'like', '%'. $this->searchTerm . '%');
                $query->orWhere('Company', 'like', '%'. $this->searchTerm . '%');
            })->orderBy('Job_ID', 'desc')->paginate(5);
        }
        elseif($this->job_location)
        {
            $jobs = Job::where(function($query) {
                $query->orWhere('Job_location', 'like', '%'. $this->job_location . '%');
                $query->orWhere('Company', 'like', '%'. $this->job_location . '%');
            })->orderBy('Job_ID', 'desc')->paginate(5);
        }
        elseif($this->job_title)
        {
            $jobs = Job::where(function($query) {
                $query->orWhere('Job_title', 'like', '%'. $this->job_title . '%');
                $query->orWhere('Company', 'like', '%'. $this->job_title . '%');
            })->orderBy('Job_ID', 'desc')->paginate(5);
        }
        else{
            $jobs = Job::orderBy('created_at','DESC')->paginate(5);
        }

        $allJobs = Job::all();
        // For Trendings
        $trending = General::where('GHeader_ID','=','1')->limit(1)->get();
        $trendings = General::where('GHeader_ID','=','1')->orderBy('General_ID','DESC')->limit(5)->get();
        // For Travelguide
        $travelGuide = General::where('GHeader_ID','=','3')->orderBy('General_ID','DESC')->take(4)->get();
        // dd($travelGuide);

        $gheaders = GHeader::all();

        return view('livewire.home-component',[
            'allJobs' => $allJobs,
            'jobs' => $jobs,
            'rentHouses' => $rentHouses,
            'allJobs' => $allJobs,
            'trending' => $trending,
            'trendings' => $trendings,
            'travelGuide' => $travelGuide,
            // 'searchJobs' => $searchJob,
            'gheaders' => $gheaders,
        ])->layout('layouts.base');
    }
}
