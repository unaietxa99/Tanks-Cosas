<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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
        <img src="img/Tiger.png" alt="Panzer VI Tiger (Alemania)" style="width:100%;">
        <div class="carousel-caption">
          <h3>Panzer VI Tiger (Alemania)</h3>
          <p>Panzerkampfwagen VI Tiger Ausf. E, Alemaniako tanke astun bat izan zen. 1942tik Bigarren Mundu Gerrako Afrika eta Europako fronteetan erabilia izan zen. Berez, Hirugarren Reichak Sobietar Batasuna bereganatzeko Bizargorri Operazioaren lehenbiziko hilabeteetan T-34 eta KV-1 sobietar tankeez osatutako ezusteko erresistentzia blindatuari erantzun emateko asmoz sortua izan zen, tankearen Tiger ezizena, Ferdinand Porsche ingeniariak eman zion, erromatar zenbakia berriz, ondorengo Panzer VI Tiger II tanketik bereizteko gehitu zitzaion.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/M4_Sherman.png" alt=" M4 Sherman (EEUU)" style="width:100%;">
        <div class="carousel-caption">
          <h3> M4 Sherman (EEUU)</h3>
          <p>M4 Sherman, ofizialki Medium Tank, M4, AEBeyako tanke bat izan zen. 1940an diseinatua eta 1941-1945 artean ekoitzia izan zen, eta 1941-1955 artean zerbitzuan egon zen. Bigarren Mundu Gerran AEBej nahiz Aliatuek erabili izan zuten. Koreako Gerran ere erabilia izan zen.
                  Tankearen ekoizpenak 50.100 unitate gainditu zituen. Erresuma Batuan M4 tankeak "Sherman" ezizena jaso zuen, William Tecumseh Sherman jeneralaren omenez, herrialde honetan estatubatuar tankeei AEBetako Gerra Zibileko jeneralen izenak ipintzeko ohitura baizegoen, ondoren AEBetan ere izen hori erabiltzen hasi ziren.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/t34.png" alt=" T-34 (URSS)" style="width:100%;">
        <div class="carousel-caption">
          <h3> T-34 (URSS)</h3>
          <p>T-34, Sobietar Batasunak ekoitzitako tanke bat izan zen. 1940-1958 artean 84.0701 unitate inguru ekoitzi ziren.
                T-26 modeloa ordezkatzeko asmoz garatu zen. Bigarren Mundu Gerran Sobietar Batasuneko su potentzia orekatuena, eta mugikortasun eta babes onena zuen tankea izan zen. 1943eko amaieraldera, T-34-85 bertsio hobetua ekoitzi zen, potentzia handiagoko kanoiarekin.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/churchill.png" alt="Churchill (Britaina Handia)" style="width:100%;">
        <div class="carousel-caption">
          <h3>Churchill (Britaina Handia)</h3>
          <p>Infantry Tank Mk IV (A22) (Bigarren Mundu Gerrako Tank, Infantry, A22) britainiarren tanke astuna izan zen, bere armadura lodiagatik, xasis luze luzea eta bogie anitzek inguratuta zeuden. beldarrak eta haien erabilera ibilgailu espezializatu espezializatuen oinarri gisa. Winston Churchill-en omenez izendatu zuten tanke multzo hau, Erresuma Batuko lehen ministroa eta Defentsa ministroa garai hartan, baina depositua garapenean parte hartu zuen lehen gerra garaian.</p>
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
