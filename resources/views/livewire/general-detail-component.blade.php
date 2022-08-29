<div>
    <section id="globel_news_details">
        <div id="news_type">
            <h4>{{ $general->G_Title }}</h4>
            <i class="uil uil-angle-right-b arrow"></i>
            <h5 class="desc">{{ $general->G_Description }}</h5>
        </div>
        <div id="news_title">
            <h5>{{ $general->G_Title }}</h5>
            <p>{{ $general->G_Description }}</p>
        </div>
        <hr class="line" style="width:100%" , size="5" , color=darkblue />
        <div id="news_posting_date">
            <i class="uil uil-edit-alt writer_icon"></i>
            @if (Auth::check())
                <p>{{ Auth::user()->name }}</p>
            @endif
            <i class="uil uil-schedule calendar"></i>
            {{-- <p><b>NOVEMBER</b> 25, 2021</p> --}}
            <p>{{ Carbon\Carbon::parse($general->created_at)->format(' F d , Y   /   h:i A') }}</p>
            {{-- <p class="posting_time">{{ Carbon\Carbon::parse()->format(' d-M-Y      G : IA') }}</p> --}}
            {{-- <p class="posting_time">2 :18 PM</p> --}}
        </div>
        <img src="{{ asset('images/general_images') }}/{{ $general->G_PHOTO }}" alt="" height="400px">
        <br>
        <p>
            {{ $general->G_Description }}
            <br>
        </p>
        <div id="news_image_and_text">
            <div class="left_image">
                <img src="{{ asset('images/general_images') }}/{{ $general->G_PHOTO }}" alt="" height="300px"
                    width="100%"><br>
                <h6>PHOTO: Jonathan McLaren</h6>
            </div>
            <div class="right_text">
                <p>{{ $general->G_Description }}</p>
            </div>

        </div>
        <p>
            {{ $general->G_Description }}
        </p>
        <div id="vertical_line">
            <div class="vl"></div>
            <p>{{ $general->G_Description }}</p>
        </div>
        <img src="{{ asset('images/general_images') }}/{{ $general->G_PHOTO }}" alt="" class="last_news_img">
        <br>
        <p>
            {{ $general->G_Description }}
            <br>
        </p>
    </section>
</div>
