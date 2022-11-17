<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> <!-- icons -->

    <title>About US</title>
</head>
<body>

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
              
                </ul>

                <div class="d-flex" role="search">
              
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

    
    <div class="card m-5">
        <h1 class="card-header d-flex justify-content-evenly">About Us</h5>
        <div class="card-body d-flex justify-content-evenly">

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="res/img/patrick.jpg" class="img-fluid rounded-start" alt="...">
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Benedikt Hauser</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita 
                                kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>


            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="res/img/patrick.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Harprit Sumon</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita 
                            kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        </p>
                        
                    </div>
                    </div>
                </div>
            </div>
          


          
        </div>
      </div>

      <?php include 'inc/modal.php';?>

      <?php include 'inc/footer.php';?>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>