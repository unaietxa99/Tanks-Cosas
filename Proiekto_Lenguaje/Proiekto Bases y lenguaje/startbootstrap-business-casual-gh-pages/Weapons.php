<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Tanks & Cosas</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">
    <link rel="stylesheet" href="PHP/assets/css/style_weapon.css">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-lower">Tanks & Cosas</span>
    </h1>

    <!-- Navigation -->


    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Tanks & Cosas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link" href="index.php">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link" href="Tanks.php">TANKS</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link" href="Weapons.php">WEAPONS</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link" href="About_us.php">ABOUT US</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="juego/juego.html">Jolasa</a>
            </li>

          </ul>

            <?php
              if (isset($_SESSION['user_id'])){
                  if (37==($_SESSION['user_id'])){
             ?>
             <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link" href="info.php">Info</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link" href="Erregistroak.php">Erregistroak</a>
            </li>
            </ul>
            <li>
              <a href="http:PHP/logout.php"><img src="img/SesioaItxi.png" width="50" height="50"></a>
            </li>
             <?php
           }
         }
             ?>


            <?php

            if (isset($_SESSION['user_id'])){
              if (37!=($_SESSION['user_id'])){

             ?>
             <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link" href="info.php">Info</a>
            </li>
            </ul>
            <li>
              <a href="http:PHP/logout.php"><img src="img/SesioaItxi.png" width="50" height="50"></a>
            </li>

            <?php
          }
        }
            ?>



          <?php

                if (!isset($_SESSION['user_id'])){

          ?>

          <ul class = "nav navbar-nav navbar-rigth">
            <li>
              <a href="http:PHP/login.php"><img src="img/SesioaHasi.png" width="50" height="50"></a>
            </li>
          </ul>

          <?php
            }
          ?>

        </div>
      </div>
    </nav>


   
    <section class="page-section">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/M1_Garand.png" alt="M1 Garand (EEUU)" style="width:100%;">
        <div class="carousel-caption">
          <h3>M1 Garand (EEUU)</h3>
          <p>M1 Garand fusila, infanteriari kantitate handitan banatu zitzaion lehengo fusil erdi-automatikoa izan zen. Bi mundu gerren artean diseinatu zuen John Garandek Estatu Batuetan, 1936an bertako indar armatuek infanteriako arma nagusi bezala hartu zutelarik. Bigarren Mundu Gerran, Koreako Gerran eta neurri txikiagoan Vietnamgo Gerran erabili zen. Ofizialki 1957an M-14 fusilak ordeztu zuen. Springfield 1903 fusila ordeztu zuen fusil hau.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/Karabine.png" alt="Fusil Mauser K98 (Alemania)" style="width:100%;">
        <div class="carousel-caption">
          <h3>Fusil Mauser K98 (Alemania)</h3>
          <p>Mauser Kar 98k edo Karabiner 98 Kurz sarrailazko fisil bat da non  7,92x57 mm kartutzoak erabiltzen dituen eta alemaniaren fusil estandarra izan zen.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/SVT-40.png" alt="Fusil Tokarev T-40 (URSS)" style="width:100%;">
        <div class="carousel-caption">
          <h3>Fusil Tokarev T-40 (URSS)</h3>
          <p>Tokarev T-40 edo SVT-40 fusil semiautomatiko bat da, non bigarren gerra mundialean serbitzuan sartu zen.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/Type 38 rifle.png" alt="38 Sanpachi-shiki hohējū (Japan)" style="width:100%;">
        <div class="carousel-caption">
          <h3>38 Sanpachi-shiki hohējū (Japan)</h3>
          <p>38 Sanpachi-shiki hohējū edo Fusil Tipo 38 sarrailazko fisil bat izan zen,non japoniarren fusil estandarra izan zen. 38 Sanpachi-shiki hohējū bost balako kargadorea zuen.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
          </section>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
