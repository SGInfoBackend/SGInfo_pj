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
