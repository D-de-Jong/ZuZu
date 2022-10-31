


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZuZu Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head> 
<body>
    <!-- Navbar -->
    <div class="container-fluid">
        <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand text-light" href="#"><img src="img/image (4).png" alt="" style="width: 110px;"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php" tabindex="-1" aria-disabled="true">Home</a>
                      </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="bestelpagina.php" tabindex="-1" aria-disabled="true">Bestellen</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
    </div>
    
    <!-- Header -->
    <div class="img-bg"></div><br>
    
    <!-- Tekst -->
    <h2 class="container-fluid text-center">
        Goedemiddag, welkom bij ZuZu
    </h2>
    <p class="container-fluid text-center">
        Wij zijn gespecialiceerd in de japanse keuken.
    </p>
    <p class="container-fluid text-center">
       <i>Het woord "sushi" is afkomstig van "su", wat azijn betekent, en "shi" -- rijst</i> 
    </p>
    <p class="container-fluid text-center">
        <strong>
            <?php
                date_default_timezone_set("Europe/Amsterdam");
                $today = date('j F Y');
                echo "Het is vandaag ", $today;
            ?>
        </strong><br>
        <strong>
            <?php
            date_default_timezone_set("Europe/Amsterdam");
            $hour = date('H');
            $minute = date('i');
            echo "Bezorgtijd vanaf nu: ", $hour+1,":",$minute;
            ?>
        </strong>
     </p>
 
     <!-- Cards -->
     <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
          <div class="card">
              <img style="height: 227px" src="img/sushi1.jpeg" alt="" class="img-fluid center" >
            <div class="card-body">
              <p class="card-text text-center">Bestel bij ons je sushi's</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
              <img src="img/sushi2.jpeg" alt="" class="img-fluid center" >
            <div class="card-body">
              <p class="card-text text-center">Keuze uit verschillende soorten sushi"s</p>
            </div>
          </div>
        </div>
      </div><br>

      <!-- Footer -->
      <footer class="container-fluid bg-dark text-light">
        <div class="row">
        <div class="col-6"> 
        <p class="text-center"><br>
          <strong class="text-center">Contactgegevens</strong>
          <p class="text-center">Restaurant ZuZu<br>
            Appelstraat 1<br>
            1111AA Fruit<br>
            zuzu@gmail.com<br>
            06 12345678<br>
          </p>
        </p>
        </div>

      <div class="col-6">
        <p class="text-center"><br>
          <strong class="text-center">Openingstijden</strong>
          <p class="text-center">Maandag: Gesloten<br>
            Dinsdag: 16:00 - 22:00<br>
            Woensdag: 16:00 - 22:00<br>
            Donderdag: 16:00 - 22:00<br>
            Vrijdag: 16:00 - 22:00<br>
            Zaterdag: 16:00 - 22:00<br>
            Zondag: Gesloten<br>
          </p>
        </p>
      </div>
    </div>
    </footer>
</body>
</html>