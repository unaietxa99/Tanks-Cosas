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

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

<style type="text/css">

body{
  margin: 0;
}
video{
  position: fixed;

  min-width: 100%;
  min-height: 100%;

  top: 50%;
  left: 50%;

  transform: translateX(-50%) translateY(-50%);

  z-index: -1;
}
audio{
    display: none;
}
</style>
  <body>



    <!-- Navigation -->


    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="Tanks.php">Tanks</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="Weapons.php">Weapons</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="About_us.php">About us</a>
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
              <a class="nav-link text-uppercase text-expanded" href="info.php">Info</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="Erregistroak.php">Erregistroak</a>
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
              <a class="nav-link text-uppercase text-expanded" href="info.php">Info</a>
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



    <section class="page-section clearfix">
      <div class="container">

<br><br><br><br><br><br>
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">

            <h1 class="site-heading text-center text-white d-none d-lg-block">
              <span class="site-heading-lower"><strong>Tanks & Cosas</strong></span>
            </h1>


          </div>

      </div>
    </section>

<audio src="urss/MadrePatria.mp3" controls autoplay loop>
</audio>    

<video src="video/OST World of Tanks 1.0 – Intro Login 2018 (screen) (youtubemp4.to).mp4" autoplay loop muted poster="img/TigerIV.jpg"> </video>







    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
