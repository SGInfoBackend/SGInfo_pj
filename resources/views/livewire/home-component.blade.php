<div>
    <!-- start carousel -->
<section id="hero">
    <!--slider-->
    <div class="hero_container  ">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active ">
            <img src="images/home3.jpg" class="d-block w-100 slider" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="images/home8.jpg" class="d-block w-100 slider" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="images/home6.jpg" class="d-block w-100 slider" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="images/home2.jpg" class="d-block w-100 slider" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="images/home1.jpg" class="d-block w-100 slider" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="images/job.jpg" class="d-block w-100 slider" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="carousel_text">
      <h1>Let's Go SINGAPORE</h1>
      <p class="carousel_para">Lorem ipsum dolor sit amet, consectetur adipisicing.<br> Consequatur vitae pariatur,
        quisquam natus praesentium aut et inventore? <br>Temporibus voluptates repudiandae consequuntur odit repellat
        exercitationem<br> fugit minus pariatur.</p>
      <div class="banner-btn">
        <a href="room_list.html"><span></span>Rooms</a>
        <a href="Job.html"><span></span>Jobs</a>
      </div>
    </div>
  </section>
  <!-- end carousel  -->
  <!----======== END Navbar & Carousel TDTZ========= -->

  <!-- for home-room -->
  <section id="home-room">
    <h2>Rooms for Rent</h2>
    <a href="{{ route('rooms')}}" class="room-detail">View all rooms</a>
    <div id="home-room-container">
      @foreach ($rentHouses as $rentHouse )
        <div class="home-room-sample">
            <a href="{{ route('roomdetails',['Rent_House_ID' => $rentHouse->Rent_House_ID])}}">
                <img src="images/room_list/{{ $rentHouse->RH_PHOTO}}" alt="room">
            </a>
            <a href="room_list.html">
                @if ($rentHouse->Avaliable_From > now())
                    <button class="avail-btn">Avail</button>
                @else
                    <button class="avail-btn">Expired</button>
                @endif
            </a>
            <div class="home-room-des">
            <h6>{{ $rentHouse->Project_type}}</h6>
            <p>${{ $rentHouse->PRICE_MAX}} <span>/ month</span></p>
            <p class="p1">{{ $rentHouse->ADDRESS}}</p>
            <hr>
            <div class="home-room-info">
                <div class="home-room-info-single">
                <span>Downtown</span>
                </div>
                <div class="home-room-info-single">
                <i class="fa-solid fa-person-walking"></i>
                <span>3 mins</span>
                </div>
            </div>
            </div>
        </div>
      @endforeach
    </div>
  </section>
  <!-- End of home-room -->

  <!-- home-gen-info -->
  <section id="home-gen-info">
    <h2>General Information</h2>
    <div class="home-gen-info-container">
      <img src="images/general_images/visa.jpg" alt="visa">
      <div class="home-gen-info-det">
        <h4>What do we need to go to Singapore?</h4>
        <ul class="home-gen-list">
          <a href="#">
            <li>Passport</li>
          </a>
          <a href="#">
            <li>Airticket</li>
          </a>
          <a href="#">
            <li>Covid 19 Vacinaiton Certificate</li>
          </a>
          <a href="#">
            <li>Filling Arrival Card</li>
          </a>
        </ul>
        <a href="general_info.html">
          <button class="home-gen-btn">See More</button>
        </a>
      </div>
    </div>

  </section>
  <!-- End of home-gen-info -->

  <!-- ======================== Travel Guide ============================= -->

  <section class="swiper-container mySwiper">
    <div class="travel_guide">
      <h1>Travel Guides</h1>
    </div>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="./images/general_images/travel-02.jpg" alt="">
        <div class="overlay">
          <p>French</p>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="./images/general_images/travel-03.jpg" alt="">
        <div class="overlay">
          <p>Myanmar</p>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="./images/general_images/travel-04.jpg" alt="">
        <div class="overlay">
          <p>America</p>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="./images/general_images/travel-12.jpg" alt="">
        <div class="overlay">
          <p>Japan</p>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="./images/general_images/travel-03.jpg" alt="">
        <div class="overlay">
          <p>Korea</p>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="./images/general_images/travel-13.jpg" alt="">
        <div class="overlay">
          <p>China</p>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="./images/general_images/travel-02.jpg" alt="">
        <div class="overlay">
          <p>Singapore</p>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="./images/general_images/travel-12.jpg" alt="">
        <div class="overlay">
          <p>Malisia</p>
        </div>
      </div>
    </div>
    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
    <div class="swiper-pagination"></div>
  </section>

  <!-- ============================= End of Travel Guide Slider ========================================== -->

  <!-- ============================= Globel News ========================================== -->
  <section id="globel_trending_news_container">
    <div class="trending_news">
      <p style="border: 5; border-color: black;">TRENDING NEWS</p>
      <marquee>This text will scroll from right to left</marquee>
    </div>
    <div id="globel_news_container">
        @foreach ($general as $article)
            <div class="globel_news_box_general" style="background-image: url({{ asset('/images/general_images/' . $article->G_PHOTO) }})">
                <a href="{{ route('detailarticle',["General_ID"=>$article->General_ID]) }}">
                <div class="background_color">
                    <p class="news_type news_type1">{{ Str::limit($article->G_Description, 50) }}</p>
                    <h4 class="news_title news_title1">{{ $article->G_Title }}
                    </h4>
                    <caption class="journalist">Mrs Christ - {{ $article->created_at }}</caption>
                </div>
                </a>
            </div>
        @endforeach
      <div id="globel_news_container2">
          @foreach ($generals as $general)
          <div class="globel_news_box_article" style="background-image: url({{ asset('/images/general_images/' . $general->G_PHOTO) }})">
            <a href="{{ route('detailarticle',["General_ID"=>$general->General_ID]) }}">
                <div class="background_color">
                <p class="news_type">{{ Str::limit($general->G_Description, 50) }}</p>
                <h4 class="news_title">{{ $general->G_Title }}</h4>
                </div>
             </a>
          </div>
        @endforeach

      </div>

    </div>
  </section>

  <!-- ============================= End of Globel News ========================================== -->

  <!-- Start HOME_JOBS -->
  <div id="home_jobs">
    <div class="jobs_header">

      <div class="search_icon">
        <i class="uil uil-search"></i>
        <input id="search_jobs" type="text" name="What are you looking for?" placeholder="Job title, keyword or company"
          required>
      </div>
      <div class="search_icon">
        <i class="uil uil-map-marker"></i>
        <input id="location" type="text" name="Location" placeholder="Area, city or town" required>
      </div>

      <div class="search_icon">
        <i class="uil uil-right-indent-alt"></i>
        <select id="jobs_categories">
          <option class="jobs_option">All Job Specializations</option>
          <option class="jobs_option">AAAA</option>
          <option class="jobs_option">BBBB</option>
          <option class="jobs_option">CCCC</option>
          <option class="jobs_option">DDDD</option>
        </select>
      </div>

      <button class="search"><a href="#">Search</a></button>
    </div>

    <section id="jobs_container">
      <div id="jobs_types">
        <h3 id="h2"><i class="uil uil-favorite"></i>&nbsp;TOP JOBS&nbsp;<i class="uil uil-favorite"></i></h3>
        @foreach ($jobs as $job)
            <div id="jobs_type">
                <div class="jobbackground_color"><a href="{{ route('jobdetails', ['Job_ID'=>$job->Job_ID]) }}">{{ $job->Job_title }}</a></div>
                <div class="jobbackground_color">${{ $job->SALARY }}</div>
                <div class="jobbackground_color">{{ $job->Company }}</div>
                <div class="jobbackground_color"><i class="uil uil-map-marker"></i> &nbsp;Yangon, Hlaing</div>
            </div>
        @endforeach
        <!--
            <div class="browse_btn"> -->
        <button class="browse"><a href="#">Browse All Jobs</a></button>
        <!-- </div> -->

      </div>


    </section>

  </div>

  <!-- END OF HOME-JOBS  -->
  <!-- start of footer -->

  <section class="btn-section">
    <h3 id="h2"><i class="uil uil-favorite"></i>&nbsp;LATEST JOBS&nbsp;<i class="uil uil-favorite"></i></h3>
    <div class="job-btn">
        @foreach ($allJobs->slice(0, 4) as $alljob)
            <button class="jobbutton"><a href="{{ route('jobdetails', ['Job_ID'=>$job->Job_ID]) }}">{{ $alljob->Job_title }}</a></button>
        @endforeach
    </div>

    <div class="job-btn1">
        @foreach ($allJobs->slice(4, 3) as $alljob)
            <button class="jobbutton"><a href="{{ route('jobdetails', ['Job_ID'=>$job->Job_ID]) }}">{{ $alljob->Job_title }}</a></button>
        @endforeach
    </div>

    <div class="job-btn2">
        @foreach ($allJobs->slice(7, 2) as $alljob)
            <button class="jobbutton"><a href="{{ route('jobdetails', ['Job_ID'=>$job->Job_ID]) }}">{{ $alljob->Job_title }}</a></button>
        @endforeach
    </div>
  </section>


  <section class="newsletter">
    <div class=" newstext">

      <div>
        <h4>NEWSLETTER SIGN UP</h4>
        <P>Lorem ipsum, or lipsum as it is sometimes known</P>
      </div>
    </div>
    <div class="form">
      <input type="text" placeholder="Your email adderss.....">
      <button class="normal">Subscribe</button>
    </div>
  </section>
</div>
