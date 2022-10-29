<div>
    <nav class="navbar navbar-expand-lg bg_blue py-4 navbar-dark sticky-top">

        <div class="container-fluid mx-lg-5">
            <a class="navbar-brand" href="#">SG<span class="info">INFO</span></a>
            <button class="navbar-toggler btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-lg-4">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item  ms-lg-4">
                        <a class="nav-link active" href="{{ route('rooms') }}">Rent Rooms</a>
                    </li>
                    <li class="nav-item  ms-lg-4">
                        <a class="nav-link active" href="{{ route('general') }}">General</a>
                    </li>
                    <li class="nav-item  ms-lg-4">
                        <a class="nav-link active" href="{{ route('job') }}">Jobs</a>
                    </li>
                    <li class="nav-item  ms-lg-4">
                        <a class="nav-link active" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item ms-lg-4">
                        <div class="dropdown">
                            <button class="dropbtn">Upload</button>
                            <div class="dropdown-content">
                                <a href="javascript:void(0)" class="dropdown-a"
                                    onclick="document.getElementById('job').style.display='block'">Job</a>
                                <a href="javascript:void(0)" class="dropdown-b"
                                    onclick="document.getElementById('article').style.display='block'">Article</a>
                                <a href="javascript:void(0)" class="dropdown-c"
                                    onclick="document.getElementById('room').style.display='block'">Room</a>
                            </div>
                        </div>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->utype == 'ADM')
                                <li class="nav-item  ms-lg-4">
                                    <div class="dropdown">
                                        <button class="dropbtn"><i class="fa-regular fa-user"></i></button>
                                        <div class="dropdown-content">
                                            <a href="{{ route('user.profile') }}" class="dropdown-e">Profile</a>
                                            <a href="{{ route('admin.dashboard') }}" class="dropdown-e">Admin Dashboard</a>
                                            <a title="logout"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                href="{{ route('logout') }}">Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            @else
                                <li class="nav-item  ms-lg-4">
                                    <div class="dropdown">
                                        <button class="dropbtn"><i class="fa-regular fa-user"></i></button>
                                        <div class="dropdown-content">
                                            <a href="{{ route('user.profile') }}" class="dropdown-e">Profile</a>
                                            <a href="{{ route('user.dashboard') }}" class="dropdown-e">Dashboard</a>
                                            <a title="logout"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                href="{{ route('logout') }}">Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @else
                            <li class="nav-item  ms-lg-4">
                                <div class="dropdown">
                                    <button class="dropbtn"><i class="fa-regular fa-user"></i></button>
                                    <div class="dropdown-content">
                                        <a href="javascript:void(0)" class="dropdown-d"
                                            onclick="document.getElementById('register').style.display='block'">Register</a>
                                        <a href="javascript:void(0)" class="dropdown-e"
                                            onclick="document.getElementById('login').style.display='block'">Login</a>
                                    </div>
                                </div>
                            </li>
                        @endif
                        @endif
                        <li class="nav-item  ms-lg-4">
                            <a class="nav-link active" href="#"><img src="{{ asset('images/myanmar.png') }}"
                                    alt="" class="logoimg"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
