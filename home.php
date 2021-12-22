<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid float-sm-right">
<nav class="navbar navbar-expand-sm navbar-dark">
<a class="navbar-brand mr-5" style="color:green;" href="#">Ecommerce</a>
<a href="#">Catagory</a>
  <form class="form-inline ml-sm-3" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-info bg-info" type="submit">Search</button>
  </form>
</nav>
</div>
<div class="container-fluid m-4">
<nav class="navbar navbar-expand-md   navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon bg-danger"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav man">
    <li class="nav-item">
      <a class="nav-link m-2 text-dark" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link m-2 text-dark" href="#">Electronics</a>
    </li>

    <li class="nav-item">
      <a class="nav-link m-2 text-dark" href="#">Cloths</a>
    </li>
    <li class="nav-item">
      <a class="nav-link m-2 text-dark" href="#">Excesory</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown ">
      <a class="nav-link dropdown-toggle m-2 text-dark" href="#" id="navbardrop" data-toggle="dropdown">
        Fashon
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item  text-dark" href="#">male</a>
        <a class="dropdown-item  text-dark" href="#">Female</a>
        <a class="dropdown-item  text-dark" href="#">Children</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link m-2  text-dark" href="#">About us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link m-2  text-dark" href="#">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link m-2  text-dark" href="registra.php">Sign up</a>
    </li>
  </ul>
  </div>  
</nav>
</div>



<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="1.jpg" alt="Los Angeles" style="width:100%; height:2%;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="2.jpg" alt="Chicago" style="width:100%; height:2%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="3.jpg" alt="New York" style="width:100%; height:2%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="small-container">
  <h3>Favorite</h3>
  <div class="row">
      <div class="col-4">
        <img src="buy-1.jpg">
          <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
              </div>
        <p> $50.00</p>
      </div> 
      <div class="col-4">
        <img src="buy-2.jpg">
          <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
              </div>
        <p> $50.00</p>
      </div> 
      <div class="col-4">
        <img src="buy-3.jpg">
          <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
              </div>
        <p> $50.00</p>
      </div> 
      <div class="col-4">
        <img src="buy-2.jpg">
          <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
              </div>
        <p> $50.00</p>
      </div> 
    </div>

</div>


<div class="small-container">
  <h3>Electronics</h3>
  <div class="row">
      <div class="col-4">
        <img src="buy-1.jpg">
          <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
              </div>
        <p> $50.00</p>
      </div> 
      <div class="col-4">
        <img src="buy-2.jpg">
          <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
              </div>
        <p> $50.00</p>
      </div> 
      <div class="col-4">
        <img src="buy-3.jpg">
          <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
              </div>
        <p> $50.00</p>
      </div> 
      <div class="col-4">
        <img src="buy-2.jpg">
          <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
              </div>
        <p> $50.00</p>
      </div> 
    </div>

</div>


</body>
</html>



