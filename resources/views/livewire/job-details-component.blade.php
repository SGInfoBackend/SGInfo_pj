<div>
    <div class="container my-5">
        <div class="row">
         <div class="col-4">
           <h6 class="text-primary text-center"><i class="fa-solid fa-user pe-2"></i>{{ $jobdetails->Job_title }}</h6>
         </div>
         <div class="col-4">
           <h6 class="text-primary text-center"><i class="fa-solid fa-dollar-sign pe-2 "></i>{{ $jobdetails->SALARY }}</h6>
         </div>
         <div class="col-4">
           <h6 class="text-primary text-center"><i class="fa-solid fa-location-dot pe-2"></i>{{ $jobdetails->Job_location }}</h6>
         </div>
        </div>

        <h6 class="my-5">Post : {{ $jobdetails->created_at->diffForHumans() }}
           <i class="fa-solid fa-share-nodes px-2"></i>
           <i class="fa-brands fa-facebook pe-2 text-primary"></i>
           <i class="fa-brands fa-youtube pe-2 text-danger"></i>
           <i class="fa-brands fa-twitter text-primary"></i>
       </h6>
       <div class="row">
         <div class="col-12 col-md-8">
           <h3>Job Description</h3><br>
           <a href="#"><span class="badge bg-primary">{{ $jobdetails->Job_title }}</span></a><br><br>
           <h6 class=".fs6text">{{ $jobdetails->Category_job }}</h6><br>
           <h6 class="my-2">{{ $jobdetails->Job_Description }}</h6>
           <h6><i class="fa-solid fa-calendar-days pe-2 text-primary"></i>Working Day: Monday to Saturday</h6>
           <h6><i class="fa-solid fa-clock pe-2 text-primary"></i>Working Time: 9:00 to 6:00</h6>
           <h6><i class="fa-solid fa-dollar-sign pe-2 text-primary"></i>{{ $jobdetails->SALARY }}</h6>
           <h6><i class="fa-solid fa-laptop-file pe-2 text-primary"></i>Experience-2years and above</h6>
           <h6><i class="fa-solid fa-location-dot pe-2 text-primary"></i>{{ $jobdetails->Job_location }}</h6>
            <div>
               <h6 class="my-3">Responsibility</h6>
               <p>-Must-Have. Odoo framework  knowledge. Strong knowledge  of Python and programming concepts.</p>
               <p>-Must have knowledge of Linux flavoured operating system</p>
               <p>-Develop and manage well-functioning databases and applications</p>
               <h6>Qualifications</h6>
               <p>-Must possess at least Computer Science/Information  </p>
               <p>-Technology or equivalent.</p>
               <p>-Preferable UCSY Bachelor's Degree</p>
               <p>-Full-Time Positions Available</p>
               <p>-Self-motivated and enthusiastic</p>
               <p>-English 4 Skills</p>
               <a class=" btn-apply btn btn-outline-primary" href="{{ route('applyjob', ['Job_title'=>$jobdetails->Job_title]) }}" role="button">Apply Job</a>
             </div>
         </div>
         <div class="col-12 col-md-4">
           <h3>More Similar Jobs</h3>

           @foreach ($similarjobs as $similarjob)
            <div class="card my-2 shadow">
                <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-briefcase pe-2 text-primary"></i><a href="jobdetail.html" style="text-decoration:none;">{{ $similarjob->Job_title }}</a></h5>
                <p class="card-text">Salary -> {{ $similarjob->SALARY }}</p>
                </div>
            </div>
           @endforeach

         </div>
       </div>
       <br>
</div>
