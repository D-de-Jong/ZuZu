<?php
session_start();
if (isset($_POST['verzenden'])) {
    $_SESSION['maki beef carpaccio kaas'] = $_POST['maki beef carpaccio kaas'];
    $_SESSION['maki crispy'] = $_POST['maki crispy'];
    $_SESSION['maki regenboog'] = $_POST['maki regenboog'];
    $_SESSION['maki crispy garnaal'] = $_POST['maki crispy garnaal'];
    $_SESSION['maki king konbanwa'] = $_POST['maki king konbanwa'];
    $_SESSION['soft shell kaas mango'] = $_POST['soft shell kaas mango'];
    $_SESSION['maki geflambeerde paling'] = $_POST['maki geflambeerde paling'];
    $_SESSION['tokio rol'] = $_POST['tokio rol'];
    $_SESSION['maki zalmmousse'] = $_POST['maki zalmmousse'];
    $_SESSION['maki garnaal'] = $_POST['maki garnaal'];

}


try {
    $db = new PDO("mysql:host=localhost;dbname=zuzu database",
        "root", "");
    if (isset($_POST['verzenden'])) {
        $makibeefcarpacciokaas = filter_input(INPUT_POST, "maki beef carpaccio kaas",
            FILTER_SANITIZE_NUMBER_INT);
        $makicrispy = filter_input(INPUT_POST, "maki crispy",
            FILTER_SANITIZE_NUMBER_INT);
        $smakiregenboog = filter_input(INPUT_POST, "maki regenboog",
            FILTER_SANITIZE_NUMBER_INT);
        $makicrispygarnaal = filter_input(INPUT_POST, "maki crispy garnaal",
            FILTER_SANITIZE_NUMBER_INT);
        $makikingkonbanwa = filter_input(INPUT_POST, "maki king konbanwa",
            FILTER_SANITIZE_NUMBER_INT);
        $softshellkaasmango = filter_input(INPUT_POST, "soft shell kaas mango",
            FILTER_SANITIZE_NUMBER_INT);
        $makigeflambeerdepaling = filter_input(INPUT_POST, "maki geflambeerde paling",
            FILTER_SANITIZE_NUMBER_INT);
        $tokiorol = filter_input(INPUT_POST, "tokio rol",
            FILTER_SANITIZE_NUMBER_INT);
        $makizalmmousse = filter_input(INPUT_POST, "maki zalmmousse",
            FILTER_SANITIZE_NUMBER_INT);
        $makigarnaal = filter_input(INPUT_POST, "maki garnaal",
            FILTER_SANITIZE_NUMBER_INT);


        $query = $db->prepare ("INSERT INTO sushi(`maki beef carpaccio kaas`, `maki crispy`, `maki regenboog`, `maki crispy garnaal`, `maki king konbanwa`, `soft shell kaas mango`, `maki geflambeerde paling`, `tokio rol`, `maki zalmmousse`, `maki garnaal`) VALUES (:maki beef carpaccio kaas, :maki crispy, :maki regenboog, :maki crispy garnaal, :maki king konbanwa, :soft shell kaas mango, :maki geflambeerde paling, :tokio rol, :maki zalmmousse, :maki garnaal)");
        $query->bindParam("maki beef carpaccio kaas", $makibeefcarpacciokaas);
        $query->bindParam("maki crispy", $makicrispy);
        $query->bindParam("maki regenboog", $makiregenboog);
        $query->bindParam("maki crispy garnaal", $makicrispygarnaal);
        $query->bindParam("maki king konbanwa", $makikingkonbanwa);
        $query->bindParam("soft shell kaas mango", $softshellkaasmango);
        $query->bindParam("maki geflambeerde paling", $makigeflambeerdepaling);
        $query->bindParam("tokio rol", $tokiorol);
        $query->bindParam("maki zalmmousse", $makizalmmousse);
        $query->bindParam("maki garnaal", $makigarnaal);
        if ($query->execute()) {
            header('Location: besteloverzicht.php');;
        } else {
            echo "Er is een fout opgetreden!";
        }
        echo "<br>";
    }
} catch (PDOException $e) {
    die("ERROR!: " . $e->getMessage());
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
                            <input type="number" name="maki beef carpaccio kaas" class="form-control" id="InputNumber" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/maki%20crispy.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>maki crispy</strong> </label>
                            <input type="number" name="maki crispy" class="form-control" id="InputNumber" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/maki%20regenboog.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>maki regenboog</strong> </label>
                            <input type="number" name="maki regenboog" class="form-control" id="InputNumber" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/maki%20crispy%20garnaal.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>maki crispy garnaal</strong> </label>
                            <input type="number" name="maki crispy garnaal" class="form-control" id="InputNumber" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/maki%20king%20konbawa.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>maki king konbanwa</strong> </label>
                            <input type="number" name="maki king konbanwa" class="form-control" id="InputNumber" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/soft%20shell%20kaas%20mango.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>soft shell kaas mango</strong> </label>
                            <input type="number" name="soft shell kaas mango" class="form-control" id="InputNumber" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/maki%20geflambeerde%20paling.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>maki geflambeerde paling</strong> </label>
                            <input type="number" name="maki geflambeerde paling" class="form-control" id="InputNumber" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/tokio%20rol.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>tokio rol</strong> </label>
                            <input type="number" name="tokio rol" class="form-control" id="InputNumber" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/maki%20zalmmousse.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>maki zalmmousse</strong> </label>
                            <input type="number" name="maki zalmmousse" class="form-control" id="InputNumber" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <img src="img/maki%20garnaal.webp" style="width: 150px">
                            <label for="exampleInputEmail1" class="form-label"> <strong>maki garnaal</strong> </label>
                            <input type="number" name="maki garnaal" class="form-control" id="InputNumber" aria-describedby="emailHelp">
                        </div>
                    </div>

                </div>
            </div>

            <div class="mt-3">
                <p><input type="submit" name="verzenden" value="ga door"/></p>
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