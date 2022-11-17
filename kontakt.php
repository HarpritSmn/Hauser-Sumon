<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> <!-- icons -->

    <title>Kontakt</title>

</head>
<body>


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


<h5 class="m-5">KONTAKTIEREN SIE UNS !!!!!!!!!!!!!!!!!!</h5>

<form class="row g-3 align-items-center m-5">
    
    <div class="col-12">
        <label for="inputVorname" class="form-label">Vorname</label>
        <input type="text" class="form-control" id="inputVorname" placeholder="Max">
    </div>

    <div class="col-12">
        <label for="inputNachname" class="form-label">Nachname</label>
        <input type="text" class="form-control" id="inputNachname" placeholder="Mustermann">
    </div>

    <div class="col">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="max.mustermann@email.com">
    </div>

    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Nachricht</label>
    </div>


    <div class="col-12  mb-5">
        <button type="submit" class="btn btn-primary">Senden</button>
    </div>
</form>

<?php include 'inc/modal.php';?>

<?php include 'inc/footer.php';?>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>