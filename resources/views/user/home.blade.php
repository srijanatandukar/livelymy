<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Lively-My</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +60 3-1234 6000</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> info@livelymy.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">Lively</span>-My</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about" onclick="scrollToAbout()">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#doctors-section" onclick="scrollToDoctors()">Doctors</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#news" onclick="scrollToNews()">News</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#contact" onclick="scrollToContact()">Contact</a>
            </li>


            
            @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="nav-link" style="background-color:greenyellow; color:black" href="{{url('myappointment')}}">My Appointment</a>
            </li>

            <li class="nav-item" style="margin-left: 20px;"> 
        <a class="nav-link" style="background-color:red; color:black; border-radius:10px;" href="{{url('donation')}}">Donations</a>
    </li>

            


            <x-app-layout>
                
            </x-app-layout>

            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>


            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth
            @endif


          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  @if(session()->has('message'))


<div class="alert alert-success">
   <button type="button" class="close" data-dismiss="alert">X</button>
   {{session()->get('message')}}


</div>
@endif



  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="#consult" onclick="scrollToConsult()" class="btn btn-primary" >Let's Talk and Fight TB</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a doctor</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1 id="about">Welcome to Lively-My <br> Center</h1>
            <p class="text-grey mb-4" >
            Tuberculosis, often abbreviated as TB, is an infectious disease caused by the bacterium Mycobacterium tuberculosis. It primarily affects the lungs but can also target other parts of the body such as the kidneys, spine, and brain. TB spreads through the air when an infected person coughs or sneezes, releasing tiny droplets containing the bacteria. TB remains a significant global health concern, particularly in regions with limited access to healthcare resources and poor living conditions. Efforts to control tuberculosis include vaccination (with the Bacillus Calmette-Guérin vaccine), early detection through testing, and improved healthcare infrastructure. Lively-My aims to help the people fight Tuberculosis. </p>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

@include('user.doctor', ['id' => 'doctors-section'])
  

@include('user.latest')
  @include('user.appointment')

  

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Tuberculosis</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partners</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Vaccination</a></li>
            <li><a href="#">One-Pharmacy</a></li>
            <li><a href="#">One-Live-Malaysia</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 id="contact">Contact</h5>
          <p class="footer-link mt-2">Subang Jaya, Selangor, Malaysia</p>
          <a href="#" class="footer-link">+ 60 3-1234 6000</a>
          <a href="#" class="footer-link">infoatlivelymy@livelymy.com</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

<script src="https://cdn.jsdelivr.net/npm/smoothscroll-polyfill/dist/smoothscroll.min.js"></script>


<!-- js for scroll -->
<script>
function scrollToDoctors() {
  const element = document.getElementById('doctors-section');
  if (element) {
    // Smoothly scroll to the section with a duration of 1000 milliseconds (1 second)
    smoothScroll(element, 1000);
  }
}

function scrollToAbout() {
  const element = document.getElementById('about');
  if (element) {
    // Smoothly scroll to the section with a duration of 1000 milliseconds (1 second)
    smoothScroll(element, 1000);
  }
}

function scrollToNews() {
  const element = document.getElementById('news');
  if (element) {
    // Smoothly scroll to the section with a duration of 1000 milliseconds (1 second)
    smoothScroll(element, 1000);
  }
}

function scrollToConsult() {
  const element = document.getElementById('consult');
  if (element) {
    // Smoothly scroll to the section with a duration of 1000 milliseconds (1 second)
    smoothScroll(element, 1000);
  }
}

function scrollToContact() {
  const element = document.getElementById('contact');
  if (element) {
    // Smoothly scroll to the section with a duration of 1000 milliseconds (1 second)
    smoothScroll(element, 1000);
  }
}

// Function to smoothly scroll to an element with a specified duration
function smoothScroll(target, duration) {
  const targetPosition = target.getBoundingClientRect().top;
  const startPosition = window.pageYOffset || window.scrollY;
  const distance = targetPosition - startPosition;
  let startTime = null;

  function animation(currentTime) {
    if (startTime === null) startTime = currentTime;
    const timeElapsed = currentTime - startTime;
    const scrollAmount = Math.easeInOutQuad(timeElapsed, startPosition, distance, duration);
    window.scrollTo(0, scrollAmount);
    if (timeElapsed < duration) requestAnimationFrame(animation);
  }

  // Easing function for smooth scrolling
  Math.easeInOutQuad = function(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
  };

  requestAnimationFrame(animation);
}
</script>



  
</body>
</html>