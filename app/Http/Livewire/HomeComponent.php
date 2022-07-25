<?php

namespace App\Http\Livewire;

use App\Models\General;
use App\Models\GHeader;
use App\Models\Job;
use App\Models\RentHouse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    public $job_title;
    public $location;
    public $search;

    public function render()
    {

        $allJobs = Job::all();

        $search_job_title = '%'. $this->job_title. '%';
        $search = '%'. $this->search. '%';
        $search_job_location = '%'. $this->location. '%';
        $rentHouses = RentHouse::orderBy('Rent_House_ID', 'DESC')->paginate(4);
        $searchJob = Job::where('Job_title',$search)->orWhere('Job_location',$search)->orWhere('Company',$search)->get();
        $jobs = Job::where('Job_title', 'LIKE', $search_job_title)
                    ->orWhere('Job_location', 'LIKE' )
                    ->paginate(10);
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
            'searchJobs' => $searchJob,
            'gheaders' => $gheaders,
        ])->layout('layouts.base');
    }
}

// ++++++++++++++++++++++++++++++++++=


<?php

namespace App\Http\Livewire\User;

use App\Models\General;
use App\Models\Job;
use App\Models\RentHouse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboardComponent extends Component
{
    public function render()
    {
        $rooms = RentHouse::where('user_id',Auth::user()->id)->get()->count();
        $job = Job::where('user_id',Auth::user()->id)->get()->count();
        $lnews = General::where('GHeader_ID','=','1')->where('user_id',Auth::user()->id)->get()->count();
        $Gnews = General::where('GHeader_ID','=','2')->where('user_id',Auth::user()->id)->get()->count();
        $jobs = Job::orderBy('created_at','DESC')->where('user_id',Auth::user()->id)->get();
        // dd($jobs);
        return view('livewire.user.user-dashboard-component',[
            "rooms" => $rooms,
            "jobs" => $jobs,
            "lnews" => $lnews,
            "Gnews" => $Gnews,
            "job" => $job,
        ])->layout('layouts.base');
    }
}
// ++++++++++++++++++++++++++++++++++

<div>
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card bg-warning" style="height:7rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="card-title"><i class="fa-solid fa-house text-white"></i></h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text text-white mt-5">

                            </p>
                            <a href="#" class="text-white">Home</a>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-white">{{ $rooms }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary" style="height:7rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="card-title"><i class="fa-solid fa-building-user text-white"></i></h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text text-white mt-5">

                            </p>
                            <a href="#" class="text-white">Jobs</a>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-white">{{ $job }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-danger" style="height:7rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="card-title"><i class="fa-solid fa-radio text-white"></i></h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text text-white mt-5">

                            </p>
                            <a href="#" class="text-white">Trending News</a>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-white">{{ $lnews }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success" style="height:7rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="card-title"><i class="fas fa-user text-white"></i></h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text text-white mt-5">

                            </p>
                            <a href="#" class="text-white">Globle News</a>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-white">{{ $Gnews }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{{--  For Post Table  --}}
<table class="table-striped table mt-5 mb-4">
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Company</td>
        <td>Job location</td>
        <td>Category Job</td>
        <td>Company URL</td>
        <td>Job Description</td>
    </tr>
    @foreach ($jobs as $job)
        <tr>
            <td>{{ $job->Job_ID }}</td>
            <td>{{ $job->Job_title }}</td>
            <td>{{ $job->Company }}</td>
            <td>{{ $job->Job_location }}</td>
            <td>{{ $job->Category_job }}</td>
            <td>{{ $job->Company_URL}}</td>
            <td>{{ Str::limit($job->Job_Description, 20) }}</td>
        </tr>
    @endforeach
</table>
{{--  End Post Table  --}}
</div>
