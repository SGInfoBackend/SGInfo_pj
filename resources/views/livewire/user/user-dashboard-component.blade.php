<div>
    <section>
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
    </section>

{{--  For Post Table  --}}
{{-- <table class="table-striped table mt-5 mb-4 table-bordered">
   <thead class="bg-primary ">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Company</th>
        <th>Job location</th>
        <th>Category Job</th>
        <th>Company URL</th>
        <th>Job Description</th>
    </tr>
   </thead>
    <tbody>
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
    </tbody>
</table> --}}

<section class="table-bg">
    <h1>Job Table</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Company</th>
                    <th>Job location</th>
                    <th>Category Job</th>
                    <th>Company URL</th>
                    <th>Job Description</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
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
            </tbody>
        </table>
    </div>
</section>
{{--  End Post Table  --}}
