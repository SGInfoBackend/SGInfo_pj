<div>
    <style>
        nav svg
        {
            height: 20px;
        }
    </style>
    <section id="main">
        <!-- hero -->
        <div class="hero-room-list">
        </div>
        <!-- main content -->
        <div class="main-content">
            @foreach ($rooms as $room )
                <div class="main-content-small">
                    <div class="main-content-img">
                        <img src="{{ asset('/images/room_list')}}/{{$room->RH_PHOTO}}" class="main-content-real-img" alt="">
                    </div>
                    <div class="main-content-text">
                        <div class="main-head">
                            <h1 class="main-head-h1">{{ $room->PROJECT_NAME}}</h1>
                            <small class="main-head-small">{{$room->Floor_Size}} sqft | </small>
                            <small class="main-head-small">{{$room->No_Room}}&nbsp;<i class="fa-solid fa-bed"></i>&nbsp;&nbsp;{{ $room->No_Birthroom}}&nbsp;<i class="fa-solid fa-bath"></i></small>
                        </div>
                        <div class="line"></div>
                        <div class="main-text">
                            <p class="main-text-p">{{ $room->RH_Description}}</p>
                            <p class="main-text-p2">From ${{$room->PRICE_MAX}} /month</p>
                        </div>
                        <div class="main-btn">
                            <a class="view-detail-btn" href="{{ route('roomdetails',['Rent_House_ID' => $room->Rent_House_ID])}}">View Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- pagination -->
        <section id="pagination" class="section-p1">
            {{$rooms->links()}}
        </section>

        <!-- New Letters -->
        <div id="newsLetter">
            <div class="newsText">
                <h4 class="newsLetter-h4">SIGN UP FOR EXCLUSIVE OFFERS FROM US</h4>
                <p class="newsLetter-p">Get E-mail updates about our latest rooms and <span class="newsLetter-span">special offers.</span></p>
            </div>
            <form class="newsLetter-form">
                <input class="newsLetter-input" type="text" placeholder="Your Email Address">
                <button class="newsLetter-btn">Sign Up</button>
            </form>
        </div>

        <!-- Agent -->
        <div class="agent">
            <h1 class="agent-h1">Expat/Relocation Featured Agents</h1>
            <div class="agent-main">
                <div class="agent-each">
                    <div class="agent-main-img">
                        <img src="images/room_list/agent1.jpg" class="agent-img" alt="">
                    </div>
                    <div class="agent-text">
                        <h3 class="agent-h3">Shak Ling</h3>
                        <p class="agent-p">IT Vision Hub</p>
                        <p class="agent-p"><i class="agent-i fa-solid fa-phone"></i>+65 4826 1593</p>
                    </div>
                </div>
                <div class="agent-each">
                    <div class="agent-main-img">
                        <img src="images/room_list/agent2.jpg" class="agent-img" alt="">
                    </div>
                    <div class="agent-text">
                        <h3 class="agent-h3">Shak Ling</h3>
                        <p class="agent-p">IT Vision Hub</p>
                        <p class="agent-p"><i class="agent-i fa-solid fa-phone"></i>+65 4826 1593</p>
                    </div>
                </div>
                <div class="agent-each">
                    <div class="agent-main-img">
                        <img src="images/room_list/agent1.jpg" class="agent-img" alt="">
                    </div>
                    <div class="agent-text">
                        <h3 class="agent-h3">Shak Ling</h3>
                        <p class="agent-p">IT Vision Hub</p>
                        <p class="agent-p"><i class="agent-i fa-solid fa-phone"></i>+65 4826 1593</p>
                    </div>
                </div>
                <div class="agent-each">
                    <div class="agent-main-img">
                        <img src="images/room_list/agent2.jpg" class="agent-img" alt="">
                    </div>
                    <div class="agent-text">
                        <h3 class="agent-h3">Shak Ling</h3>
                        <p class="agent-p">IT Vision Hub</p>
                        <p class="agent-p"><i class="agent-i fa-solid fa-phone"></i>+65 4826 1593</p>
                    </div>
                </div>
                <div class="agent-each">
                    <div class="agent-main-img">
                        <img src="images/room_list/agent1.jpg" class="agent-img" alt="">
                    </div>
                    <div class="agent-text">
                        <h3 class="agent-h3">Shak Ling</h3>
                        <p class="agent-p">IT Vision Hub</p>
                        <p class="agent-p"><i class="agent-i fa-solid fa-phone"></i>+65 4826 1593</p>
                    </div>
                </div>
                <div class="agent-each">
                    <div class="agent-main-img">
                        <img src="images/room_list/agent2.jpg" class="agent-img" alt="">
                    </div>
                    <div class="agent-text">
                        <h3 class="agent-h3">Shak Ling</h3>
                        <p class="agent-p">IT Vision Hub</p>
                        <p class="agent-p"><i class="agent-i fa-solid fa-phone"></i>+65 4826 1593</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
