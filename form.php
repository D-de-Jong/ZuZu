<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klantgevens</title>
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
                    <a class="nav-link text-light" href="form.php" tabindex="-1" aria-disabled="true">Bestellen</a>
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
        <div class=""> <h1>klantgegevens</h1></div>
        <form>
            <div class="">
              <label for="exampleInputEmail1" class="form-label">Voornaam</label>
              <input type="FirstName" class="form-control" id="InputFirstName" aria-describedby="emailHelp">
             
            </div>
               <div class="">
                <label for="exampleInputPassword1" class="form-label">Achternaam</label>
                <input type="LastName" class="form-control" id="InputLastName">
               </div>
           
                <div class="">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                  <label for="exampleInputPassword1" class="form-label">Adres</label>
                  <input type="Address" class="form-control" id="InputAddress">
                </div>
                
                <div class="">
                  <label for="exampleInputEmail1" class="form-label">Postcode</label>
                  <input type="Zipcode" class="form-control" id="InputZipcode" aria-describedby="emailHelp">
                </div>
                <div class="">
                  <label for="exampleInputPassword1" class="form-label">Woonplaats</label>
                  <input type="City" class="form-control" id="InputCity">
                </div>
                <div class="mt-3">
                  <button type="submit " class="btn btn-secondary"><a class="text-light" style="text-decoration: none" href="bestelpagina.php">Ga verder</a></button>
                </div>
            <form>
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
</html>