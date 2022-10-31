<?php
session_start();
$melding = "";


if (isset($_POST['verzenden'])) {
    //var_dump(!empty($_POST['sushi6']));
    if  (!empty($_POST['sushi1']) || !empty($_POST['sushi2']) || !empty($_POST['sushi3']) || !empty($_POST['sushi4']) || !empty($_POST['sushi5']) || !empty($_POST['sushi6']) || !empty($_POST['sushi7']) || !empty($_POST['sushi8']) || !empty($_POST['sushi9']) || !empty($_POST['sushi10'])) {

        $sushi1 = filter_input(INPUT_POST, 'sushi1', FILTER_VALIDATE_INT);
        $sushi2 = filter_input(INPUT_POST, 'sushi2', FILTER_VALIDATE_INT);
        $sushi3 = filter_input(INPUT_POST, 'sushi3', FILTER_VALIDATE_INT);
        $sushi4 = filter_input(INPUT_POST, 'sushi4', FILTER_VALIDATE_INT);
        $sushi5 = filter_input(INPUT_POST, 'sushi5', FILTER_VALIDATE_INT);
        $sushi6 = filter_input(INPUT_POST, 'sushi6', FILTER_VALIDATE_INT);
        $sushi7 = filter_input(INPUT_POST, 'sushi7', FILTER_VALIDATE_INT);
        $sushi8 = filter_input(INPUT_POST, 'sushi8', FILTER_VALIDATE_INT);
        $sushi9 = filter_input(INPUT_POST, 'sushi9', FILTER_VALIDATE_INT);
        $sushi10 = filter_input(INPUT_POST, 'sushi10', FILTER_VALIDATE_INT);

        if (!$sushi1 && !$sushi2 && !$sushi3 && !$sushi4 && !$sushi5 && !$sushi6 && !$sushi7 && !$sushi8 && !$sushi9 && !$sushi10) {
            $melding = "Vul wel een getal in!";
        }

        $sushi1 = $_POST['sushi1'];
        $sushi2 = $_POST['sushi2'];
        $sushi3 = $_POST['sushi3'];
        $sushi4 = $_POST['sushi4'];
        $sushi5 = $_POST['sushi5'];
        $sushi6 = $_POST['sushi6'];
        $sushi7 = $_POST['sushi7'];
        $sushi8 = $_POST['sushi8'];
        $sushi9 = $_POST['sushi9'];
        $sushi10 = $_POST['sushi10'];
        $_SESSION['sushi1'] = $sushi1;
        $_SESSION['sushi2'] = $sushi2;
        $_SESSION['sushi3'] = $sushi3;
        $_SESSION['sushi4'] = $sushi4;
        $_SESSION['sushi5'] = $sushi5;
        $_SESSION['sushi6'] = $sushi6;
        $_SESSION['sushi7'] = $sushi7;
        $_SESSION['sushi8'] = $sushi8;
        $_SESSION['sushi9'] = $sushi9;
        $_SESSION['sushi10'] = $sushi10;
        header('Location: besteloverzicht.php');
    }
}
else {
    $melding = "Geef aan welke sushi je wilt!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestelpagina</title>
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

    <!--Forms-->
    <div class="container">
      <div class="row">
        <div class=""> <h1>sushi bestellen</h1></div>
        <form>
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                    <div class="col">
                        <div class="p-3">
                            <img src="img/maki%20beef%20carpaccio%20kaas.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>maki beef carpaccio kaas</strong> </label>
                            <input type="number" value="" name="sushi1" class="mb-2">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/maki%20crispy.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>maki crispy</strong> </label>
                            <input type="number" value="" name="sushi2" class="mb-2">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/maki%20regenboog.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>maki regenboog</strong> </label>
                            <input type="number" value="" name="sushi3" class="mb-2">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/maki%20crispy%20garnaal.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>maki crispy garnaal</strong> </label>
                            <input type="number" value="" name="sushi4" class="mb-2">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/maki%20king%20konbawa.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>maki king konbanwa</strong> </label>
                            <input type="number" value="" name="sushi5" class="mb-2">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/soft%20shell%20kaas%20mango.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>soft shell kaas mango</strong> </label>
                            <input type="number" value="" name="sushi6" class="mb-2">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/maki%20geflambeerde%20paling.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>maki geflambeerde paling</strong> </label>
                            <input type="number" value="" name="sushi7" class="mb-2">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/tokio%20rol.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>tokio rol</strong> </label>
                            <input type="number" value="" name="sushi8" class="mb-2">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/maki%20zalmmousse.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>maki zalmmousse</strong> </label>
                            <input type="number" value="" name="sushi9" class="mb-2">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/maki%20garnaal.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>maki garnaal</strong> </label>
                            <input type="number" value="" name="sushi10" class="mb-2">
                        </div>
                    </div>

                </div>
            </div>

            <div class="mt-3">
             <input type="submit" name="verzenden" value="Ga door"/>
            </div>
            <form>
            <br>
    </div>
    </div>


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

      <div class="container col-6">
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