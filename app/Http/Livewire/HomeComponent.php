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
    // public $job_title;
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
        $search = '%'. $this->searchTerm. '%';
        // $searchJob = Job::where('Job_location',$search)->get();
        $rentHouses = RentHouse::orderBy('Rent_House_ID', 'DESC')->paginate(5);
        $jobs = Job::where(function($query) {
            $query->where('Job_title', 'like', '%'. $this->searchTerm . '%');
            $query->orWhere('Company', 'like', '%'. $this->searchTerm . '%');
        })->orderBy('Job_ID', 'desc')->paginate(5);



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
            'trending' => $trending,
            'trendings' => $trendings,
            'travelGuide' => $travelGuide,
            // 'searchJob' => $searchJob,
            'gheaders' => $gheaders,
        ])->layout('layouts.base');
    }
}
