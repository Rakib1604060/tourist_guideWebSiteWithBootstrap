
<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>

<!---THe header part here------>
<div class="page-header container">
  <h1> The Tourist  Touch</h1>
  <p>we help tourist all over Bangladesh</p>
</div>



<!---this is mainly the navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="#">Tourist Touch</a>

<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="hotel.php">Hotel</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="places.php">Places</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="loginorsignup.php">Login/SignUp</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>
</nav>
 <!--middle image slider section---->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img class="d-block w-100 h-60 img-fluid" src="img/back4.jpg" alt="First slide">
       <div class="carousel-caption">
         <h3>Place 01</h3>
       </div>
     </div>
     <div class="carousel-item">
       <img class="d-block w-100 h-60" src="img/back2.jpg" alt="Second slide">
       <div class="carousel-caption">
         <h3>Place 02</h3>
       </div>
     </div>
     <div class="carousel-item">
       <img class="d-block w-100 h-60" src="img/back3.jpg" alt="Third slide">
       <div class="carousel-caption">
         <h3>Place 03</h3>
       </div>
     </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
 </div>
<hr>


<!--content of text---->
<div class="card text-center container">
  <div class="card-header">
    About Us
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    Why do we use it?

    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
    </p></p>
    <a href="#" class="btn btn-primary">Know More</a>
  </div>
  <div class="card-footer text-muted">
    We Touch Tourist Emotion
  </div>
</div>







<!--Card view system-->
<div class="container" style="margin-top:25px;">


<div class="card-deck">

    <div class="card bg-light" style="width: 18rem;" >
      <img src="img/hotel.jpg" class="card-img-top" alt="book any hotel">
      <div class="card-body">
        <h5 class="card-title">Book Best Hotel Nearby</h5>
        <p class="card-text">we can search and suggest you the best hotel your nearby.</p>
        <a href="#" class="btn btn-primary">Book Now</a>
      </div>

  </div>

<div class="card bg-light" style="width: 18rem;">
  <img src="img/place1.jpg" class="card-img-top" alt="book any hotel">
  <div class="card-body">
    <h5 class="card-title">Historical Place</h5>
    <p class="card-text">we can search and suggest you the best hotel your nearby.</p>
    <a href="#" class="btn btn-primary">Book Now</a>
  </div>

</div>


<div class="card " style="width: 18rem;">
  <img src="img/place1.jpg" class="card-img-top" alt="book any hotel">
  <div class="card-body">
    <h5 class="card-title">Historical Place</h5>
    <p class="card-text">we can search and suggest you the best hotel your nearby.</p>
    <a href="#" class="btn btn-primary">Book Now</a>
  </div>
</div>

</div>
</div>
<!--fotter part-->





<!--javascript file of bootstrap--------->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-    q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/    popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script type="text/javascript" src="js/bootstrap.min.js">
</script>
</body>
</html>
