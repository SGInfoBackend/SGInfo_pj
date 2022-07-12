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
  <link rel="stylesheet" href="{{asset('css/login_register.css')}}">
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
  <!-- <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
      /> -->
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <!-- Google Font(Montserrat) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">
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
                    <a href="{{ route('addjob')}}" class="dropdown-a" onclick="document.getElementById('job').style.display='block'">Job</a>
                    <a href="{{ route('addarticle')}}" class="dropdown-b" onclick="document.getElementById('article').style.display='block'">Article</a>
                    <a href="{{ route('addroom')}}" class="dropdown-c" onclick="document.getElementById('room').style.display='block'">Room</a>
                </div>
            </div>
          </li>
          <li class="nav-item  ms-lg-4">
            <div class="dropdown">
                <button class="dropbtn"><i class="fa-regular fa-user"></i></button>
                <div class="dropdown-content">
                    <a href="/register" class="dropdown-d" onclick="document.getElementById('register').style.display='block'">Register</a>
                    <a href="/login" class="dropdown-e" onclick="document.getElementById('login').style.display='block'">Login</a>
                    <a href="">Logout</a>
                </div>
            </div>
          </li>
          <li class="nav-item  ms-lg-4">
            <a class="nav-link active" href="#"><img src="images/myanmar.png" alt="" class="logoimg"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav -->

    {{$slot}}
    <footer class="section-footer">
        <div class="col">
          <h4>SG<span class="info">INFO</span></h4>
          <p>Lorem ipsum dolor sit amet<br> consectetur adipisicing elit. <br> Voluptatibus, dignissimos.
            <br> Lorem ipsum dolor sit amet <br> consectetur adipisicing<br> elit.
          </p>
        </div>

        <div class="col">
          <h4>INFORMATION</h4>
          <!-- <a href="#">About us</a> -->
          <a href="Contact.html">Contact Us</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Privacy Policy</a>
          <a href="#">F.A.Q.</a>
        </div>

        <div class="col">
          <h4>QUICK LINKS</h4>
          <a href="#">Rooms</a>
          <a href="Job.html">Jobs</a>
          <a href="#">General</a>
        </div>

        <div class="col">
          <h4>CONTACT</h4>
          <p>90 Madison Ave,First Floor New York,NY</p>
          <a href="tel:+95 1 9669724">Telephone: 200 256 1855</a>
          <a href="mailto:sginfo@myanmar.com">Email: mail@yourmail.com</a>
          <div class="social-links">
            <i class="uil uil-facebook-f uil_icon"></i>
            <i class="uil uil-instagram-alt uil_icon"></i>
            <i class="uil uil-twitter uil_icon"></i>
            <i class="uil uil-youtube uil_icon"></i>
          </div>
        </div>

        <div class="copyright">
          <p>ITVisionHub SGcamp4@2022 | All Rights Reserved</p>
        </div>
      </footer>
      <!-- end of footer -->
      <script src="{{ asset('js/jquery.min.js')}}"></script>
      <script src="{{ asset('js/main.js')}}"></script>
    @livewireScripts()
</body>
</html>
