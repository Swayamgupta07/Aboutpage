<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time();?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed:wght@300&family=Roboto+Mono:ital,wght@0,100;1,100;1,700&display=swap" rel="stylesheet">
</head>
<body>
<?php include'menu.php';?>
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="https://source.unsplash.com/2000x689/?mountains" alt="Los Angeles" class="d-block" >

      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/2000x689/?skymountains" alt="Chicago" class="d-block" >
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/2000x689/?river" alt="New York" class="d-block">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About us</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="https://source.unsplash.com/2000x689/?trees" class="img-fluid aboutimg" alt="">
  </div>
  <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4">I am Swayam Gupta</h2>
      <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque impedit nobis, aut sapiente consequatur, tenetur earum, veniam error quis sint illum unde ratione.</p>
      <a href="about.php" class="btn btn-success">Check more</a>
  </div>
  </div>
</section>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Services</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
      <img class="card-img-top" src="https://source.unsplash.com/2000x689/?beautifulnature" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Beautiful Nature:) </h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>

      </div>

      <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
      <img class="card-img-top" src="https://source.unsplash.com/2000x689/?beautifulnature" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Beautiful Nature:) </h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>

      </div>

      <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
      <img class="card-img-top" src="https://source.unsplash.com/2000x689/?beautifulnature" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Beautiful Nature:) </h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>

      </div>
    </div>
  </div>
  </section>

  <section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Galary
  <div class="container-fluid">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <img src="https://source.unsplash.com/2000x689/?beautifulnature" class="img-fluid pb-4" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="https://source.unsplash.com/2000x689/?beautifulnature" class="img-fluid pb-4" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="https://source.unsplash.com/2000x689/?beautifulnature" class="img-fluid pb-4" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="https://source.unsplash.com/2000x689/?beautifulnature" class="img-fluid pb-4" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="https://source.unsplash.com/2000x689/?beautifulnature" class="img-fluid pb-4" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="https://source.unsplash.com/2000x689/?beautifulnature" class="img-fluid pb-4" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="https://source.unsplash.com/2000x689/?beautifulnature" class="img-fluid pb-4" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="https://source.unsplash.com/2000x689/?beautifulnature" class="img-fluid pb-4" alt="">
    </div><div class="col-lg-4 col-md-4 col-12">
      <img src="https://source.unsplash.com/2000x689/?beautifulnature" class="img-fluid pb-4" alt="">
    </div>
    </div>
  </div>
  </section>



  <section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Galary</h2>
  </div>
<div class="w-50 m-auto"><form action="userinfo.php" method="post">
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="user" autocomplete="off" class="form-control">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" autocomplete="off" class="form-control">
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" name="mobile" autocomplete="off" class="form-control">
  </div>
  <div class="form-group">
    <label>Comments</label>
    <textarea  class="form-control" name="comments" style="margin-bottom: 10px";></textarea>
  </div>

  <button type="submit" class="btn btn-success">Submit</button>
</form></div>
</section>
<footer>
  <p class = "p-3 bg-dark text-white">Swayamgupta09@gmail.com</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
