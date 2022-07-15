<div>
    <style>
        nav svg{
            height: 20px;
        }
        .slider {
            height: 37px !important;
        }
    </style>

    <div class="py-5 title-text">
        <p class="text-center text-primary" style="font-size: 24px;">Jobs Career Opportunity</p>
      </div>
    <!-- start jobs -->
    <div class="container">
        <div class="row">
          <div class="col-12 col-md-3">
            <div class="row">
                <div class="col-12 my-2">
                    <div class="card shadow">
                        <div class="card-body">
                            <h4>Job Type</h4>
                            {{-- @foreach ($jobs as $job)

                            @endforeach --}}
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="full_time" wire:model='show'>
                                <label class="form-check-label" for="full_time">
                                    Full Time
                                </label>
                                Label Email: {{ var_export($show) }}
                            </div>
                            {{-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $job->Typeofrole_ID }}" id="part_time" wire:model='selected'>
                                <label class="form-check-label" for="part_time">
                                  Part Time
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $job->Typeofrole_ID }}" id="internship" wire:model='selected'>
                                <label class="form-check-label" for="internship">
                                  Internship
                                </label>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-12 my-2">
                    <div class="card shadow ">
                        <div class="card-body">
                            <h4>Position</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="andorid" checked>
                                <label class="form-check-label" for="andorid">
                                    Android Developer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="web" >
                                <label class="form-check-label" for="web">
                                  Web Developer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="odoo" >
                                <label class="form-check-label" for="odoo">
                                  Odoo Developer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="ios" checked>
                                <label class="form-check-label" for="ios">
                                    IOS Developer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="react" >
                                <label class="form-check-label" for="react">
                                  React Developer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="swip" >
                                <label class="form-check-label" for="swip">
                                  Swip Developer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="python" checked>
                                <label class="form-check-label" for="python">
                                    Python Developer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="c#" >
                                <label class="form-check-label" for="c#">
                                  C# Developer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="notejs" >
                                <label class="form-check-label" for="notejs">
                                  Notejs Developer
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 my-2">
                  <div class="card shadow">
                      <div class="card-body">
                          <h4>Experience Level</h4>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="full_time" checked>
                              <label class="form-check-label" for="">
                                  Fresher/Entry
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="part_time" >
                              <label class="form-check-label" for="part_time">
                                Manager
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="internship" >
                              <label class="form-check-label" for="internship">
                                Director Above
                              </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="internship" >
                            <label class="form-check-label" for="internship">
                             1year_Exp & Above
                            </label>
                        </div>
                      </div>
                  </div>
                </div>


                <div class="col-12 my-2">
                  <div class="card my-2 shadow">
                    <div class="card-body workfromhome">
                      <a href="" class="text-decoration-none">
                         <p class="mb-0">Search only <span class="fw-bold">Work from Home OR Remote Jobs</span></p>
                      </a>
                    </div>
                  </div>
                </div>


                <div class="col-12 my-5" style="margin-top: 1.7rem !important;">
                    <div class="card shadow">
                        <div class="card-body">
                            <h4>Salary</h4>
                              <div class="input-group mb-3">

                                  <input wire:ignore type="text" id="slider1" class="form-control" placeholder="Min" aria-label="Min" id="salaryMin">
                                  <span class="input-group-text">-</span>
                                  <input wire:ignore type="text" id="slider2" class="form-control" placeholder="Max" aria-label="Max" id="salaryMax">

                                  </div>
                            </div>
                    </div>
                </div>
            </div>

          </div>
          <div class="col-12 col-md-9">

            {{-- @foreach ($jobs as $job)
                <div class="card my-2 shadow">
                    <div class="card-body">
                        <a href="{{ route('jobdetails', ['Job_ID'=>$job->Job_ID]) }}" class="text-decoration-none">{{ $job->Job_title }}</a>
                        <p class="mt-2">{{ Str::limit($job->Job_Description, 100) }}</p>
                        <a href="{{ route('jobdetails', ['Job_ID'=>$job->Job_ID]) }}" class="text-decoration-none">See More..</a>
                    </div>
                </div>
            @endforeach --}}

          </div>
        </div>
    </div>
</div>

