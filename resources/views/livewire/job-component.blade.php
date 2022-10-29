<div>
    <style>
        nav svg {
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
                                @foreach ($typeofroles as $typeofrole)
                                    <div class="form-check">
                                        <input class="form-check-input" name="typeofrole" type="checkbox"
                                            value="{{ $typeofrole->Typeofrole_ID }}" wire:model="selectedId">
                                        {{-- id="$typeofrole->Typeofrole_ID" --}}
                                        <label class="form-check-label" for="{{ $typeofrole->Typeofrole_Name }}">
                                            {{ $typeofrole->Typeofrole_Name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-12 my-2">
                        <div class="card shadow ">
                            <div class="card-body">
                                <h4>Position</h4>
                                @foreach ($jobs as $job)
                                    <div class="form-check">
                                        <input class="form-check-input" name="position" type="checkbox"
                                            value="{{ $job->Job_title }}" wire:model="selectedJob">
                                        {{-- id="{{ $job->Job_ID }}" --}}
                                        <label class="form-check-label" for="{{ $job->Job_title }}">
                                            {{ $job->Job_title }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-12 my-2">
                        <div class="card shadow">
                            <div class="card-body">
                                <h4>Experience Level</h4>
                                @foreach ($jobs as $job)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{ $job->exp_level }}"
                                            wire:model="expLevel" id="{{ $job->Job_ID }}">
                                        <label class="form-check-label" for="{{ $job->exp_level }}">
                                            {{ $job->exp_level }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-12 my-2">
                        <div class="card my-2 shadow">
                            <div class="card-body workfromhome">
                                <a href="" class="text-decoration-none">
                                    <p class="mb-0">Search only <span class="fw-bold">Work from Home OR Remote
                                            Jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 my-5">
                        <div class="card shadow">
                            <div class="card-body">
                                <h4>Salary</h4>
                                <div class="input-group mb-3">
                                    <input wire:ignore type="text" id="slider" class="form-control"
                                        placeholder="Min" aria-label="Min" id="salaryMin" wire:model="min_price">
                                    <span class="input-group-text">-</span>
                                    <input wire:ignore type="text" id="slider" class="form-control"
                                        placeholder="Max" aria-label="Max" id="salaryMax" wire:model="max_price">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-9">
                @if ($selectedId)
                    @foreach ($jobs as $job)
                        <div class="card card-height my-2 shadow">
                            <div class="card-body">
                                <h5 class="text-decoration-none">{{ $job->Job_title }}</h5> {{-- href="{{ route('jobdetails', ['Job_ID'=>$job->Job_ID]) }}" --}}
                                <p class="mt-2">{{ Str::limit($job->Job_Description, 100) }}</p>
                                <a href="{{ route('jobdetails', ['Job_ID' => $job->Job_ID]) }}"
                                    class="text-decoration-none">See More..</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="card card-height my-2 shadow">
                        <div class="card-body">
                            <p class="text-primary text-muted">Here is no Job!</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
