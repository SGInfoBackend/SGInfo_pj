<!----======== Navbar & Carousel TDTZ========= -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SGInfo</title>
  <link rel="stylesheet" href="{{ asset('css/home_page.css')}}">
  <link rel="stylesheet" href="{{ asset('css/general_info.css')}}">
  {{-- <link rel="stylesheet" href="{{asset('css/present_restaurant.css')}}"> --}}
  <link rel="stylesheet" href="{{asset('css/room_detail.css')}}">
  <link rel="stylesheet" href="{{asset('css/job.css')}}">
  <link rel="stylesheet" href="{{asset('css/footer.css')}}">
  {{-- <link rel="stylesheet" href="{{asset('css/contact.css')}}"> --}}
  <link rel="stylesheet" href="{{asset('css/general_info_detail.css')}}">
  <link rel="stylesheet" href="{{asset('css/room_list.css')}}">
  <link rel="stylesheet" href="{{asset('css/room_posting.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  {{-- <link rel="stylesheet" href="{{asset('css/login_register.css')}}"> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link
    href="https://fonts.googleapis.com/css2?family=Francois+One&family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,600;1,300;1,500;1,600;1,800&family=Poppins:ital,wght@0,300;0,500;0,600;0,900;1,500;1,700&family=Roboto+Condensed:ital@1&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,500&display=swap"
    rel="stylesheet">
  <!-- Icon Scout -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <!-- SWIPER JS -->
  <!-- CSS only -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<script src="{{ asset('js/jquery.min.js')}}"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <!-- Google Font(Montserrat) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  {{-- noUiSlider cdn --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <!-- start nav -->
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
            <a class="nav-link active" href="{{ route('rooms')}}">Rooms</a>
          </li>
          <li class="nav-item  ms-lg-4">
            <a class="nav-link active" href="{{ route('general')}}">General</a>
          </li>
          <li class="nav-item  ms-lg-4">
            <a class="nav-link active" href="{{ route('job')}}">Jobs</a>
          </li>
          <li class="nav-item  ms-lg-4">
            <a class="nav-link active" href="#">Contact Us</a>
          </li>
          <li class="nav-item ms-lg-4">
            <div class="dropdown">
                <button class="dropbtn">Upload</button>
                    <div class="dropdown-content">
                        <a href="#" class="dropdown-a" onclick="document.getElementById('job').style.display='block'">Job</a>
                        <a href="#" class="dropdown-b" onclick="document.getElementById('article').style.display='block'">Article</a>
                        <a href="#" class="dropdown-c" onclick="document.getElementById('room').style.display='block'">Room</a>
                    </div>
            </div>
          </li>
          @if (Auth::check())
              @if(Auth::user()->utype == 'ADM')
              <li class="nav-item  ms-lg-4">
                <div class="dropdown">
                    <button class="dropbtn"><i class="fa-regular fa-user"></i></button>
                    <div class="dropdown-content">
                        <a href="{{ route('user.profile') }}" class="dropdown-e">Profile</a>
                        <a href="{{ route('admin.dashboard') }}" class="dropdown-e">Dashboard</a>
                        <a title="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout')}}">Logout</a>
                        <form id="logout-form" action="{{ route('logout')}}" method="POST">@csrf</form>
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
                        <a title="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout')}}">Logout</a>
                        <form id="logout-form" action="{{ route('logout')}}" method="POST">@csrf</form>
                    </div>
                </div>
              </li>
              @endif
            @else
              <li class="nav-item  ms-lg-4">
                <div class="dropdown">
                    <button class="dropbtn"><i class="fa-regular fa-user"></i></button>
                    <div class="dropdown-content">
                      <a href="#" class="dropdown-d" onclick="document.getElementById('register').style.display='block'">Register</a>
                      <a href="#" class="dropdown-e" onclick="document.getElementById('login').style.display='block'">Login</a>
                    </div>
                </div>
              </li>
            @endif
          <li class="nav-item  ms-lg-4">
            <a class="nav-link active" href="#"><img src="{{ asset('images/myanmar.png') }}" alt="" class="logoimg"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav -->
    <div class="w3-container" wire:ignore>
        <div id="login" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('login').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>
                <div class="main">
                    <form class="w3-container first" name="frm-login" method="POST" action="{{ route('login')}}">
                        @csrf
                        <h1 class="modal-h1">Welcome to SG Info</h1>
                        <div class="userInput">
                            <div class="modal-div">
                                <label for="" class="modal-label">EMAIL</label> <br>
                                <input class="modal-input" name="email" type="text" placeholder="Enter email">
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">PASSWORD</label> <br>
                                <input class="modal-input" name="password" type="password" placeholder="Enter password">
                            </div>
                            <p><a href="">Forgot Password?</a></p>
                            <button class="uploadBtn" type="submit">LOGIN</button>
                        </div>
                    </form>
                    <div class="otherLogin">
                            <p class="other-p">(OR)</p>
                            <div class="google">
                                <img class="other-img" src="images/login_register/google.svg" alt="">
                                <h2 class="other-h2"><a class="other-a" href="{{ route('googleauth') }}">Continue with Google</a></h2>
                            </div>
                            <div class="facebook">
                                <img class="other-img" src="images/login_register/facebook.svg" alt="">
                                <h2 class="other-h2"><a href="{{ route('facebookauth') }}" class="other-a">Continue with Facebook</a> </h2>
                            </div>
                            <div class="apple">
                                <img class="other-img" src="images/login_register/apple.svg" alt="">
                                <h2 class="other-h2"><a class="other-a" href="{{ route('githubauth') }}">Continue with GitHub</a></h2>
                            </div>
                            <div class="other-login">New to SG Info? <a href="" class="other-login-a">Sign up</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="w3-container" wire:ignore>
        <div id="register" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('register').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                <div class="main">
                    <form class="w3-container first" method="POST" action="{{ route('register')}}">
                        @csrf
                        <h1 class="modal-h1">Sign up</h1>
                        <h4 class="modal-h4">Search everything on your own time from SG Info</h4>
                        <div class="userInput">
                            <div class="modal-div">
                                <label for="" class="modal-label">FULL NAME</label> <br>
                                <input class="modal-input" name="name" type="text" placeholder="Enter fullname">
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">EMAIL</label> <br>
                                <input class="modal-input" name="email" type="text" placeholder="Enter email">
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">PASSWORD</label> <br>
                                <input class="modal-input" name="password" type="password" placeholder="Enter password">
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">COMFIRMED PASSWORD</label> <br>
                                <input class="modal-input" name="password_confirmation" type="password" placeholder="Confirm your password">
                            </div>
                            <p class="modal-p">Between 8 and 72 characters</p>
                            <button class="uploadBtn" type="submit">REGISTER</button>
                        </div>
                    </form>
                        <div class="otherLogin">
                            <p class="other-p">(OR)</p>
                            <div class="google">
                                <img class="other-img" src="images/login_register/google.svg" alt="">
                                <h2 class="other-h2"><a class="other-a" href="">Continue with Google</a></h2>
                            </div>
                            <div class="facebook">
                                <img class="other-img" src="images/login_register/facebook.svg" alt="">
                                <h2 class="other-h2"><a href="" class="other-a">Continue with Facebook</a> </h2>
                            </div>
                            <div class="other-login">Already a member? <a href="" class="other-login-a">Log in</a></div>
                        </div>

                        <div class="term&condition">
                            <div class="line"></div>
                            <div class="term">
                                <p class="term-p"><i class="fa-solid fa-square-check"></i>  I accept Coursera's <a href="" class="term-a">Terms of Use</a> and <a href="" class="term-a">Privacy Notice</a>. Having trouble logging in? <a href="">Learner help center</a></p>
                                <p class="term-p">This site is protected by reCAPTCHA Enterprise and the Google <a href="" class="term-a">Privacy Policy</a> and <a href="" class="term-a">Terms of Service apply</a>.</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @livewire('add-house-component')
    @livewire('add-general-component')
    @livewire('add-job-component')
    {{$slot}}
   <!-- footer -->
  <footer class="section-footer">

    <div class="foot-col">
      <h4 class="footer-h4">SG<span class="info">INFO</span></h4>
      <p class="footer-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, dignissimos.
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
      </p>
    </div>

    <div class="foot-col">
      <h4 class="footer-h4">INFORMATION</h4>
      <a class="footer-a" href="Contact.html">Contact Us</a>
      <a class="footer-a" href="#">Terms & Conditions</a>
      <a class="footer-a" href="#">Privacy Policy</a>
      <a class="footer-a" href="#">F.A.Q.</a>
    </div>

    <div class="foot-col">
      <h4 class="footer-h4">QUICK LINKS</h4>
      <a class="footer-a" href="room_list.html">Rooms</a>
      <a class="footer-a" href="Job.html">Jobs</a>
      <a class="footer-a" href="general_info.html">General</a>
    </div>

    <div class="foot-col footer-last">
      <h4 class="footer-h4">CONTACT</h4>
      <p class="footer-p">90 Madison Ave,First Floor New York,NY</p>
      <a class="footer-a" href="tel:+9519669724">Telephone: 200 256 1855</a>
      <a class="footer-a" href="mailto:sginfo@myanmar.com">Email: mail@yourmail.com</a>
      <div class="social-links">
        <i class="uil uil-facebook-f uil_icon"></i>
        <i class="uil uil-instagram-alt uil_icon"></i>
        <i class="uil uil-twitter uil_icon"></i>
        <i class="uil uil-youtube uil_icon"></i>
      </div>
    </div>

    <div class="copyright">
      <p class="footer-p footer-p-last">ITVisionHub SGcamp4@2022 | All Rights Reserved</p>
    </div>

  </footer>

  <!-- end of footer -->
      <script src="{{ asset('js/main.js')}}"></script>
      {{-- noUiSlider cdn --}}
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.js" integrity="sha512-1mDhG//LAjM3pLXCJyaA+4c+h5qmMoTc7IuJyuNNPaakrWT9rVTxICK4tIizf7YwJsXgDC2JP74PGCc7qxLAHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @livewireScripts()
    <script>
        window.addEventListener('hide_modal', event => {
            $('#room').hide();
        })
        window.addEventListener('hide_modal', event => {
            $('#article').hide();
        })
        window.addEventListener('hide_modal', event => {
            $('#staticBackdrop').hide();
        })
        window.addEventListener('show_modal', event => {
            $('#room').hide();
            $('#job').hide();
            $('#login').css('display', 'block');
        })
    </script>
    @stack('scripts')
</body>
</html>
