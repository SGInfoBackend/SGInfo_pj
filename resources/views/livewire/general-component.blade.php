<div>
     <!-- ============================= Globel News ========================================== -->
  <section id="globel_trending_news_container">
    <div class="trending_news">
      <p style="border: 5; border-color: black;">TRENDING NEWS</p>
      <marquee>This text will scroll from right to left</marquee>
    </div>
    <div id="globel_news_container">

            @foreach ($trending as $article)
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
          @foreach ($trendings as $general)
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


  <!-- Global News Start -->
  <section id="global-news">
    <div class="first-global">
      <h3 class="header3">GLOBLE NEWS</h3>
      <div class="information">

        @foreach ($globleNew as $globle)
            <div class="news">
                <div class="gl-news-photo1">
                <a href="{{ route('detailarticle',["General_ID"=>$globle->General_ID]) }}">
                    <img src="{{ asset('/images/general_images')}}/{{ $globle->G_PHOTO }}" class="image1">
                </a>
                <div class="gl-news-des">
                    <h4 class="header4">{{ $globle->G_Title }}</h4>
                    <h4 class="header4"><strong>{{ Str::limit($general->G_Description, 50) }}</strong></h4>
                    <p> {{ Auth::user()->name }} - {{ Carbon\Carbon::parse($general->created_at)->format(' F d , Y   /   h:i A') }} <br>
                        {{ Str::limit($general->G_Description, 50) }}
                    </P>
                </div>
                </div>
            </div>
        @endforeach

        <div class="fourphotos">
          <div class="column">
            @foreach ($globleNews as $globle)
            <div class="gl-news-photo2">
              <!-- <a href="general_info_detail.html"> -->
              <img src="{{ asset('/images/general_images')}}/{{ $globle->G_PHOTO }}" class="image2">
              <!-- </a> -->
              <p class="gl-text"><strong>{{ Str::limit($globle->G_Description, 50) }}</strong><br>
                {{ Carbon\Carbon::parse($globle->created_at)->format(' F d , Y ') }}
              </p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div id="gl-general">
      <div class="news-contianer">
          <h3 class="header3">MUST READ</h3>
          <div class="popular">
            @foreach ($mustRead as $mustread)
                <div class="gl-news-photo3">
                    <img src="{{ asset('/images/general_images')}}/{{ $mustread->G_PHOTO }}"  class="image3" >
                    <p class="gl-text">{{ Str::limit($mustread->G_Description, 50) }}</p>
                </div>
            @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- ============================= End of Globel news ========================================== -->

 <!-- ======================== Travel Guide ============================= -->

 <section class="swiper-container mySwiper">
  <div class="travel_guide">
    <h1>Travel Guides</h1>
  </div>
  @foreach ($travelGuide as $travelguide)
    <div class="swiper-wrapper">
        <div class="swiper-slide">
        <img src="{{ asset('/images/general_images')}}/{{ $travelguide->G_PHOTO }}" >
        <div class="overlay">
            <p>{{ $travelguide->G_Title }}</p>
        </div>
        </div>
    </div>
  @endforeach
  <!-- <div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div> -->
  <div class="swiper-pagination"></div>
</section>

<!-- ============================= End of Travel Guide Slider ========================================== -->


  <!-- moh's general -->
  <section id="general_info">
    <div id="first_general">
      <div class="first_container">
          @foreach ($present as $Present)
            <div class="single">
                <h3 class="header_3">PRESENTS</h3>
                <a href="{{ route('detailarticle',["General_ID"=>$Present->General_ID]) }}">
                <img src="{{ asset('/images/general_images')}}/{{ $Present->G_PHOTO }}"  class="gift_img">
                </a>
                <h5 class="header_5">{{ $Present->G_Title }}</h5>
                <div class="single_des">
                    <h4>{{ $Present->G_Name }}</h4>
                    <span><strong>{{ Auth::user()->name }}</strong> - {{ Carbon\Carbon::parse($Present->created_at)->format(' F d , Y') }}</span>
                    <p>{{ Str::limit($mustread->G_Description, 200) }}</p>
                </div>
                <div class="small_article">
                    <div class="small_img">
                    <a href="{{ route('detailarticle',["General_ID"=>$Present->General_ID]) }}">
                        <img src="{{ asset('/images/general_images')}}/{{ $Present->G_PHOTO }}" >
                    </a>
                    <p class="small_title">
                        <strong>Hand Me Name</strong> <br>
                        <span><strong>{{ Auth::user()->name }}</strong> - {{ Carbon\Carbon::parse($Present->created_at)->format(' F d , Y') }}</span> <br>
                    </p>
                    </div>
                </div>
            </div>
            @endforeach
      </div>
      <div class="first_container">
        @foreach ($restaurant as $Restaurant)
          <div class="single">
              <h3 class="header_3">RESTAURANTS</h3>
                <a href="{{ route('detailarticle',["General_ID"=>$Restaurant->General_ID]) }}">
                <img src="{{ asset('/images/general_images')}}/{{ $Restaurant->G_PHOTO }}"  class="gift_img">
                </a>
                <h5 class="header_5">Restaurant</h5>
                <div class="single_des">
                    <h4>{{ $Restaurant->G_Name }}</h4>
                    <span><strong>{{ Auth::user()->name }}</strong> - {{  Carbon\Carbon::parse($Restaurant->created_at)->format(' F d , Y')  }}</span>
                    <p>{{ Str::limit($Restaurant->G_Description, 50) }}</p>
                </div>
                <div class="small_article">
                    <div class="small_img">
                        <a href="{{ route('detailarticle',["General_ID"=>$Restaurant->General_ID]) }}">
                        <img src="{{ asset('/images/general_images')}}/{{ $Restaurant->G_PHOTO }}" >
                        </a>
                        <p class="small_title">
                        <strong>{{ $Restaurant->G_Title }}</strong> <br>
                        <span><strong>{{ Auth::user()->name }}</strong> - {{  Carbon\Carbon::parse($Restaurant->created_at)->format(' F d , Y')  }}</span> <br>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div id="first_general">
      <div class="first_container">
        <div class="group">
          <h3 class="header_3">MOST POPULAR</h3>
          <div class="circle_gp">
            @foreach ($mostPopular as $popular)
                <div class="circle">
                    <a href="{{ route('detailarticle',["General_ID"=>$popular->General_ID]) }}">
                    <img src="{{ asset('/images/general_images')}}/{{ $popular->G_PHOTO }}" >
                    </a>
                    <p>
                    {{ $popular->G_Title }} <br>
                    <span>{{ Str::limit($popular->G_Description, 20) }}</span>
                    </p>
                </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of middle general -->

  <!-- ============================ For Health & Education Article ============================= -->
  <section id="health_education_container">
    <div class="article_container">
      <div class="article_title">
        <h4 class="health_title">Health & Education</h4>
        <hr style="width:65%" , size="5" , color=darkblue />
      </div>
      <div class="article">
        @foreach ($healthEducation as $health)
        <div class="article_row">
            <img src="{{ asset('/images/general_images')}}/{{ $health->G_PHOTO }}"  class="article_image">
            <div class="article_text">
              <h4 class="article_type">{{ $health->G_Name }}</h4>
              <h5 class="edu_title">{{ $health->G_Title }}</h5>
              <span class="edu_description">{{ Str::limit($health->G_Description, 200) }}</span>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <div class="advertisement">
      <div class="advertisement_title">
        <hr style="width:30%" , size="5" , color=darkblue />
        <span class="advertise_title">Advertisement</span>
        <hr style="width:30%" , size="5" , color=darkblue />
      </div>
      <!--Bootstrap card with slider class-->
      <div class="advertisement_container">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active ">
              <img src="images/general_images/beach.avif" class="d-block w-100 img_slider" alt="...">
            </div>
            <div class="carousel-item ">
              <img src="images/general_images/fashion.jpg" class="d-block w-100 img_slider" alt="...">
            </div>
            <div class="carousel-item ">
              <img src="images/general_images/travel-02.jpg" class="d-block w-100 img_slider" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <div class="adertise_carousel_text">
            <h5>NEWSPAPER</h5>
            <p>The art of puplishing.</p>
            <h6>THE MOST POPULAR NEWS MAGAZINE THEME</h6>
            <button class="buynow_btn">Buy Now</button>
          </div>
        </div>

      </div>
    </div>

     </div>

  </section>

</div>
