<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> <!-- icons -->
    
    <title>Document</title>
</head>
<body>

<!--  //<?php // include inc/formrequired.php ?> -->

<!-- +++++++++++++++++++++++++++++++++++++++++   Navbar Anfang   +++++++++++++++++++++++++++++++++++++++++  -->
    
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Hotelium</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="#">Zimmer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontakt.php">Kontakt</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutUs.php">About us</a>
        </li>
      </ul>
      <div class="d-flex" role="search">
        <!-- <button class="btn btn-outline-success" type="submit">Search</button>-->
        <button type="button" class="btn btn-outline-dark shadow-none me-lg3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
            Registrieren
        </button>

</div>
    </div>
  </div>
</nav>


<!-- +++++++++++++++++++++++++++++++++++++++++   Navbar Ende   +++++++++++++++++++++++++++++++++++++++++  -->


<!-- +++++++++++++++++++++++++++++++++++++++++   Carousel Anfang   +++++++++++++++++++++++++++++++++++++++++  -->


<div id="carouselExampleIndicators" class=" carousel slide d-block w-50 mx-auto mt-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
  
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="res/img/hotel.jpg" class="d-block w-100 img-responsive" alt="...">
        </div>
        <div class="carousel-item">
            <img src="res/img/pool.jpg" class="d-block w-100 img-responsive" alt="...">
        </div>
        <div class="carousel-item">
            <img src="res/img/restaurant.jpg" class="d-block w-100 img-responsive" alt="...">
        </div>
        <div class="carousel-item">
            <img src="res/img/rezeption.jpg" class="d-block w-100 img-responsive" alt="...">
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!-- +++++++++++++++++++++++++++++++++++++++++   Carousel Ende   +++++++++++++++++++++++++++++++++++++++++  -->


<!-- +++++++++++++++++++++++++++++++++++++++++   Modal Anfang   +++++++++++++++++++++++++++++++++++++++++  -->

<?php include 'inc/modal.php';?>

<!-- +++++++++++++++++++++++++++++++++++++++++   Modal Ende   +++++++++++++++++++++++++++++++++++++++++  -->


<!-- +++++++++++++++++++++++++++++++++++++++++   Footer Anfang   +++++++++++++++++++++++++++++++++++++++++  -->


<?php include 'inc/footer.php';?>


<!-- +++++++++++++++++++++++++++++++++++++++++   Footer Ende   +++++++++++++++++++++++++++++++++++++++++  -->


<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>