<!DOCTYPE html>
<html lang="en">

<head>
  <title>Gem Master</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
      position: relative;
    }


    .carousel-inner {
      background-color: #111;
    }

    .carousel-inner img {
    
      width: 90%;


      margin: auto;
      /* background-color: #111; */
    }

    .carousel-caption h3 {
      color: rgb(239, 244, 247) !important;
      font-size: 20pt;
      font: bold;
      background-color: #050505;

    }

    .carousel-caption p {
      color: rgba(239, 244, 247) !important;
      font: bold;
      background-color: #050505;
    }

    @media (max-width: 600px) {
      .carousel-caption {
        display: none;
        /* Hide the carousel text when the screen is less than 600 pixels wide */


      }

    }


    .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
    }

    .btn:hover,
    .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
    }




    .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #3d7080;
      ;
      border: 0;
      font-size: 14px !important;
      letter-spacing: 4px;
      opacity: 0.9;

    }

    label {
      color: white;
    }

    .navbar li a,
    .navbar .navbar-brand {
      color: #eeeaea !important;
    }

    .navbar-nav li a:hover {
      color: rgb(210, 223, 224) !important;
    }

    .navbar-nav li.active a {
      color: rgb(3, 3, 3) !important;
      background-color: #3d7080;
    }

    #about {
      background-image: url("background2.jpg");
      width: 100%;
      height: 700px;
      /* You must set a specified height */
      background-position: center;
      /* Center the image */
      background-repeat: no-repeat;
      /* Do not repeat the image */
      background-size: cover;
      /* Resize the background image to cover the entire container */
    }

    .container p {
      color: #eeeaea;
      font-family: Arial, Helvetica, sans-serif;
      text-align: justify;
      /* padding-right: 30%; */
      /* padding-left:30%; */
      font-size: 16pt;

    }

    .container h2,
    h3 {
      color: #eeeaea;
      text-align: center;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 20pt;
      /* padding-right: 60%; */
      /* padding-top: 5%; */

    }

    .container1 {
      background-image: url("back1.jpg");
      width: 100%;
      height: 500px;
      background-position: center;
      /* Center the image */
      background-repeat: no-repeat;
      /* Do not repeat the image */
      background-size: cover;

    }

    .grid-container {
      display: grid;
      grid-gap: 10px;
      padding: 10px;
    }

    .grid-item {
      text-align: center;
      padding: 20px;
      font-size: 20px;
    }

    .item1 {
      grid-column: 1;
      grid-row: 1;
    }

    .item2 {
      grid-column: 2;
      grid-row: 1;
    }

    .item3 {
      grid-column: 3;
      grid-row: 1;
    }

    .item4 {
      grid-column: 4;
      grid-row: 1;
    }

    .item5 {
      grid-column: 5;
      grid-row: 1;
    }
    .about1{
      grid-column: 1;
      grid-row:1;

    }
    .about2{
      grid-column: 2;
      grid-row:1;
    }
 

    footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
    }

    footer a {
      color: #f5f5f5;
    }

    footer a:hover {
      color: #777;
      text-decoration: none;
    }
  </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand" href="#myPage">Logo</a> -->
        <img src="gem1.png" width="70" height="50">
        <label>GEM & Jewellers</label>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#myCarousel">HOME</a></li>
          <li><a href="#about">ABOUT US</a></li>
          <li><a href="#contact">CONTACT</a></li>
          <li><a href="#product.php">PRODUCT</a></li>
          <li><a href="register.php">SIGN UP</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img1.jpg" width="800" height="400">
        <div class="carousel-caption">
          <h3>Explore the World of Gems</h3>
          <p>Feel Unique and Elegant </p>
        </div>
      </div>

      <div class="item">
        <img src="img2.jpg" width="800" height="400">
        <div class="carousel-caption">
          <h3>Crafted For You</h3>
          <p>~ Every P!ece Of Jewelry T3lls A St0ry</p>
        </div>
      </div>

      <div class="item">
        <img src="img4.jpg" width="800" height="400">
        <div class="carousel-caption">
          <h3>Shine Bright Like A Diamond</h3>
          <p>JEWELRY ALWAYS FITS</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Container (The About Section) -->
  <div id="about" class="container text-center" style="padding-top:70px;padding-bottom:70px">
    <div class="grid-container">
      <div class="grid-item about1">
        <h2><b>Why Us?</b></h2>
        <p><b>We realize that individual taste, styling and design are extremely
            important to you when you decide to make your jewelry purchase.
            Our aim is to provide quality services and products with the highest
            degree of customer satisfaction. Our globally sourced designs help to
            express your unique personality and suit your lifestyle. We will personally
            help you to select the exact style & design that will celebrate the important
            occasions and milestones of your life. </b></p>
      </div>
      <div class="grid-item about2">
        <h3><b>Our Mission</b></h3>
        <p><b>At Gem & Jewelers our mission has always been a tradition of trust,
            high ethical standards, knowledge of our jewelry products and services,
            fair pricing and value to our customers.</b></p>

      </div>

    </div>
  </div>



  <!-- Container (Contact Section) -->
  <div id="contact" class="container1 text-centre" style="padding-top:70px;padding-bottom:70px">
    <h3 style="text-align: center;color:white;">Contact Information</h3>

    <div class="grid-container">
      <div class="grid-item item1">
        <img src="gem1.png">
        <h3 style="color:white;text-align: center;">Gem & Jewellers</h3>

      </div>
      <div class="grid-item item2">
        <p><span class="glyphicon glyphicon-map-marker"></span>F-10, Islamabad</p>

      </div>
      <div class="grid-item item3">
        <p><span class="glyphicon glyphicon-phone"></span>Phone: +92 34534234</p>
      </div>
      <div class="grid-item item4">
        <p><span class="glyphicon glyphicon-envelope"></span>Email: gemaster@mail.com</p>
      </div>
      <div class="grid-item item5">
        <div class="map-responsive">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6639.048187289688!2d73.00856932544193!3d33.69538507281792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbe6b317b7edf%3A0x8b77a25fe8205d13!2sF-10+Markaz+Islamabad!5e0!3m2!1sen!2s!4v1559677595025!5m2!1sen!2s"
            width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>



  <!-- Footer -->
  <footer class="text-center">
    <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br><br>
    <small>&copy; Copyright 2019- All Rgihts Reserved - MACKUS GEM & Jewellers</small>
  </footer>

  <script>
    $(document).ready(function () {
      // Initialize Tooltip
      $('[data-toggle="tooltip"]').tooltip();

      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {

          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    })
  </script>

</body>

</html>