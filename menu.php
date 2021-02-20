<!DOCTYPE html>
<html lang="en">
<head>
  <title>Muruga Bhavan | Menu</title>
  <link rel="icon" href="bhavan.jpeg" type="image/icon type">
  <meta charset="utf-8">
  <link rel="stylesheet" href="menustyle.css">
  <link rel="stylesheet" href="footer.css">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  /* Make the image fully responsive */
  
  </style>
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<div class="bg-img" class="float-container">
        <div id = "t" class="float-child">
            <img src = "bhavan.jpeg" id="image">
        </div>
        <div id = "p" class="float-child">
            <ul class="nav justify-content-end">
                <li class="nav-item" >
                <a class="nav-link"  id = "item" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id = "item" href="#bookings">Bookings</a>
                </li>
                <a class="nav-link" id = "item" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="menucard.jpeg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="menucard.jpeg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="menucard.jpeg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  <form action="send_details.php" id="bookings" method="POST">
  <br>
  <div id="formbg" class="row">
  <h1 class="mm">Book your table</h1>

    <div class="col-9"> 
      <input type="text" class="float-right" id="name" placeholder="Name" name="name">
    </div>
    <div class="col-9"> 
      <input type="text"  class="float-right" id="pno" placeholder="Phone number" name="pno">
    </div>
    <div class="col-9">
      <input type="email"  class="float-right" id="email" placeholder="Email id" name="email">
    </div>
    <div class="col-9">
      <input type="datetime-local"  class="float-right" id="dt" placeholder="Enter date/time for booking" name="dt">
    </div>
    <div class="col-9">
    <input type="text"  class="float-right" id="food" placeholder="Breakfast/Lunch/Dinner" name="food">
    </div>
    <div class="col-9">
    <button type="submit" class="btn btn-primary float-right" name="submit">Send details</button>
</div>
</div>
  </form>
<div class = "footer" id="contact">
  <i class="fa fa-phone" id="icon1"></i><a id="footericons" href="#">10, Adyar, Chennai</a>
  <i class="fa fa-map-marker" id="icon2"></i><a id="footericons" href="#">+91 82378 29732</a>
  <i class="fa fa-envelope" id="icon3"></i><a id="footericons" href="mailto:ab@gmail.com">mb@gmail.com</a><br>
  <a href="https://www.google.com/search?tbs=lf:1,lf_ui:1&tbm=lcl&q=location+anna+university&rflfq=1&num=10&ved=2ahUKEwj9ke3a4vXuAhUUOSsKHUGAC0gQtgN6BAgTEAc#rlfi=hd:;si:;mv:[[13.0262271,80.2418169],[13.005884799999999,80.20306529999999]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3,lf:1,lf_ui:1">
  <img src="map.jpeg" alt="map" id="mapres"></a>
<p id="copy">@Copyright 2021, Hotel Muruga Bhavan</p><br><br>
</div>
</body>
</html>
