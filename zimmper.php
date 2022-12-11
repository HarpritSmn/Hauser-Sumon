<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> <!-- icons -->

    <title>Zimmer</title>
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
          <a class="nav-link" href="kontakt.php">Kontakt</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutUs.php">About us</a>
        </li>
      </ul>
      <div class="d-flex" role="search">
      <?php
                        if(isset($_SESSION["useruid"])){
                            echo '<button type="button" class="btn btn-outline-dark shadow-none me-lg3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal"> Profil </button>' ;
                            echo '<button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal"href="includes/logout.inc.php"> Log out </button>';
                        }
                        else{
                            echo'<button type="button" class="btn btn-outline-dark shadow-none me-lg3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal"> Login </button> ';
                            echo'<button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal"> Registrieren </button>';
                        }
                    ?>

</div>
    </div>
  </div>
</nav>

<!-- +++++++++++++++++++++++++++++++++++++++++   Navbar Ende   +++++++++++++++++++++++++++++++++++++++++  -->

<h4 class="m-5 d-flex justify-content-center">Zimmerangebot</h4>

<div class="m-5 d-flex flex-wrap flex-lg-row justify-content-center ">

    <div class="card m-4" style="width: 18rem;">
        <img class="card-img-top" src="res/rooms/room1.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>

    <div class="card m-4" style="width: 18rem;">
        <img class="card-img-top" src="res/rooms/room1.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>

    <div class="card m-4" style="width: 18rem;">
        <img class="card-img-top" src="res/rooms/room1.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>

    <div class="card m-4" style="width: 18rem;">
        <img class="card-img-top" src="res/rooms/room1.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>

</div>


<?php include 'inc/modal.php';?>

<?php include 'inc/footer.php';?>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
