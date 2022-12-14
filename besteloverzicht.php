<?php
session_start();
?>

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

<!--Besteloverzicht-->
    </div>
    <div class="container">
      <div class="card">
        <div class="card-body">
            <h3>Uw bestelling</h3>
            <?php
            echo "maki beef carpaccio kaas: " . $_SESSION["sushi1"] . "<br>";
            echo "maki crispy: " . $_SESSION["sushi2"] . "<br>";
            echo "maki regenboog: " . $_SESSION["sushi3"] . "<br>";
            echo "maki crispy garnaal: " . $_SESSION["sushi4"] . "<br>";
            echo "maki king konbanwa: " . $_SESSION["sushi5"] . "<br>";
            echo "soft shell kaas mango: " . $_SESSION["sushi6"] . "<br>";
            echo "maki geflambeerde paling: " . $_SESSION["sushi7"] . "<br>";
            echo "tokio rol: " . $_SESSION["sushi8"] . "<br>";
            echo "maki zalmmousse: " . $_SESSION["sushi9"] . "<br>";
            echo "maki garnaal: " . $_SESSION["sushi10"] . "<br>";
            ?>
        </div>
      </div>
        <div class="card">
        <div class="card-body">
            <h3>Uw gegevens</h3>
            <?php
            echo " " . $_SESSION["naam"] . "<br>";
            echo "  " . $_SESSION["achternaam"] . "<br>";
            echo "  " . $_SESSION["email"] . "<br>";
            echo "  " . $_SESSION["adres"] . "<br>";
            echo "  " . $_SESSION["postcode"] . "<br>";
            echo "  " . $_SESSION["woonplaats"] . "<br>";
            ?>
        </div>
        </div>
    </div>
    <br>

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


