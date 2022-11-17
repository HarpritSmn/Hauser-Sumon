<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Impressum</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">HOTELIUM</a>
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
                <a class="nav-link" href="#">About us</a>
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

    <h4 class="m-3">Impressum</h4>
    <p class="m-3"><b>Informationen und Offenlegung gemäß &sect;5 (1) ECG, &sect; 25 MedienG, &sect; 63 GewO und &sect; 14 UGB</b></p>
    <div class="container m-3 ">
        <div class="row row-cols-2 my-4">
          <div class="col"> <b>Webseitenbetreiber:</b></div>
          <div class="col">Hotelium</div>
        </div>
        
        <div class="row row-cols-2 my-4">
          <div class="col"><b>Firmenbuchnummer:</b></div>
          <div class="col">123456ergt</div>
        </div>

        <div class="row row-cols-2 my-4">
            <div class="col"><b>Firmenbuchgericht:</b></div>
            <div class="col"></div>
        </div>

        <div class="row row-cols-2 my-4">
            <div class="col"><b>UID-Nr:</b></div>
            <div class="col">Höchstädtplatz 6, 1200 Wien</div>
        </div>

        <div class="row row-cols-2 my-4">
            <div class="col"><b>Gewerbeaufsichtbehörde:</b></div>
            <div class="col">Bezirkshauptmanstadt Musterstadt</div>
        </div>

        <div class="row row-cols-2 my-4">
            <div class="col"><b>Mitgliedschaften:</b></div>
            <div class="col">WKÖ</div>
        </div>

        <div class="row row-cols-2 my-4">
            <div class="col"><b>Kontaktdaten:</b></div>
            <div class="col"> <br> Telefon: 069912345678 <br> Email: Hotelium@hotel.com <br> Fax:</div>
        </div>

        <div class="row row-cols-2 my-4">
            <div class="col"><b>Anwendbare Rechtsvorschrift:</b></div>
            <div class="col"></b> www.ris.bka.gv.at </div>
        </div>


    </div>

    <?php include 'inc/modal.php';?>

    <?php include 'inc/footer.php';?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>