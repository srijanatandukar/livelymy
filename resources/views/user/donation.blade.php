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

  <link rel="stylesheet" href="../assets/css/donation.css">
  

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



<!-- Your donation page content -->
<div id="donation-page">

    <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>


    <div class="container2">
        <h2>Make a Donation</h2>
        <form id="donationForm">
            <div class="form-group">
                <label for="amount">Amount <span class="required">*</span>:</label>
                <input type="number" id="amount" name="amount" min="100" step="50" class="form-control" required>
                <div id="amount-error" class="error-message"></div> <!-- Error message container for amount -->
            </div>
            <div class="form-group">
                <label for="name">Name <span class="required">*</span>:</label>
                <input type="text" id="name" name="name" class="form-control" required>
                <div id="name-error" class="error-message"></div> <!-- Error message container for name -->
            </div>
            <div class="form-group">
                <label for="email">Email <span class="required">*</span>:</label>
                <input type="email" id="email" name="email" class="form-control" required>
                <div id="email-error" class="error-message"></div> <!-- Error message container for email -->
            </div>
            <div id="paypal-button-container"></div>
        </form>
    </div>

    <style>
        .error-message {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
            display: none;
        }
        .required {
            color: red;
            margin-left: 5px;
        }
    </style>

    <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                if (validateForm()) { // Validate the form before creating the order
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: document.getElementById('amount').value
                            }
                        }]
                    });
                }
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    alert('Transaction completed by ' + details.payer.name.given_name + '! Thank you for your donation!');
                });
            }
        }).render('#paypal-button-container');

        function validateForm() {
            var amount = document.getElementById('amount').value;
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var isValid = true;

            // Validate amount
            if (!amount) {
                displayErrorMessage('amount', 'Amount is required.');
                isValid = false;
            } else {
                hideErrorMessage('amount');
            }

            // Validate name
            if (!name) {
                displayErrorMessage('name', 'Name is required.');
                isValid = false;
            } else {
                hideErrorMessage('name');
            }

            // Validate email
            if (!email) {
                displayErrorMessage('email', 'Email is required.');
                isValid = false;
            } else {
                hideErrorMessage('email');
            }

            return isValid; // Form is valid if all fields are filled
        }

        function displayErrorMessage(fieldId, errorMessage) {
            var errorElement = document.getElementById(fieldId + '-error');
            errorElement.textContent = errorMessage;
            errorElement.style.display = 'block';
        }

        function hideErrorMessage(fieldId) {
            var errorElement = document.getElementById(fieldId + '-error');
            errorElement.textContent = '';
            errorElement.style.display = 'none';
        }
    </script>
</div>



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