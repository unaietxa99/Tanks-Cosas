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
        <link href="css/bootstrap.min.css" rel="stylesheet">

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
                  <a href="http:PHP/login.php"><img src="img/SesioaHasi.png" width="50" height="50"></a>
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


        <section class="page-section about-heading">
              <div class="button" align="center">
                  <a href="Erregistroak.php"><input type="submit" class="button_active" value="Erregistro_Guztiak_Ikusi"></a>
                  <a href="Erregistroak_Gehitu.php"><input type="submit" class="button_active" value="Erregistroak_Gehitu_eta_Ezabatu"></a>
                  <a href="Erregistroak_Ezabatu.php"><input type="submit" class="button_active" value="Erregistroak_Eguneratu"></a>
              </div>
        </section>

            <section class="page-section about-heading">

              <form action="borrar/Gehitu.php" method="post">

                <h1 align="center"> Tankeen Erregistroak Gehitu </h1>

                <div align="center">
                    <input type="text" id="Izena" name="Izena" placeholder="Izena"/>
                </div>

                <div>
                    <input type="text" id="Herrialdea" name="Herrialdea" placeholder="Herrialdea"/>
                </div>

                <div>
                    <input type="text" id="Tipo" name="Tipo" placeholder="Tipo"/>
                </div>

                <div>
                    <input type="text" id="kainoia" name="kainoia" placeholder="Cal.Cañon"/>
                </div>

                <div>
                    <input type="text" id="Urtea" name="Urtea" placeholder="Serbitzu urtea"/>
                </div>

                <div>
                    <input type="number" id="kantitatea" name="kantitatea" placeholder="Sortutako kantitatea"/>

                </div>

                <div>
                    <input type="text" id="Pisua" name="Pisua" placeholder="Pisua"/>
                </div>

                <div>
                    <input type="text" id="Blindaje" name="Blindaje" placeholder="Blindajea"/>
                </div>

                <div>
                    <input type="text" id="Primaria" name="Primaria" placeholder="Arma Printzipala"/>
                </div>

                <div>
                    <input type="text" id="Secundaria" name="Secundaria" placeholder="Arma Sekundarioa"/>
                </div>

                <div>
                    <input type="text" id="Kostua" name="Kostua" placeholder="Kostua"/>
                </div>

                <div>
                    <input type="text" id="Kostua" name="Fabri" placeholder="Fabrikantea"/>
                </div>

                <div class="button" align="left">
                    <button type="submit">Gehitu</button>
                    <button type="reset">Reset</button>
                </div>

        </form>

            </section>

        <!--CSS-->
        <style type = "text/css">

        form {
            /* Sólo para centrar el formulario a la página */
            margin: 0 auto;
            width: 400px;
            /* Para ver el borde del formulario */
            padding: 1em;
            border: 1px solid #CCC;
            border-radius: 1em;
        }

        form div + div {
            margin-top: 1em;
            text-align: center;
            color: #FFFFFF;
        }

        label {
            /* Para asegurarse que todos los labels tienen el mismo tamaño y están alineados correctamente */
            display: inline-block;
            width: 90px;
            text-align: right;
            color: #FFFFFF;
        }

        input, textarea {
            /* Para asegurarse de que todos los campos de texto tienen las mismas propiedades de fuente
               Por defecto, las areas de texto tienen una fuente con monospace */
            font: 1em sans-serif;

            /* Para darle el mismo tamaño a todos los campos de texto */
            width: 300px;
            -moz-box-sizing: border-box;
            box-sizing: border-box;

            /* Para armonizar el look&feel del borde en los campos de texto */
            border: 1px solid #999;
        }

        input:focus, textarea:focus {
            /* Para dar un pequeño destaque en elementos activos*/
            border-color: #000;
        }

        textarea {
            /* Para alinear campos de texto multilínea con sus labels */
            vertical-align: top;

            /* Para dar suficiente espacio para escribir texto */
            height: 5em;

            /* Para permitir a los usuarios cambiar el tamaño de cualquier textarea verticalmente
                No funciona en todos los navegadores */
            resize: vertical;
        }

        .button {
            /* Para posicionar los botones a la misma posición que los campos de texto */
            padding-left: 0px; /* mismo tamaño a todos los elementos label */
        }
        button {
            /* Este margen extra representa aproximadamente el mismo espacio que el espacio
               entre los labels y sus campos de texto */
            margin-left: .9em;
        }

        </style>

        <?php
        			include("PHP/Konexioa.php");
        			$link=ConnectDataBase();
        			$result=mysqli_query($link,"select * from tanques");
        		?>

            <style type="text/css">
                     table tr td{
                       border: 1px solid white;
                       text-align: center;
                     }
                     table tr th{
                       border: 1px solid white;
                       text-align: center;
                     }
                     table{
                       border: 3px solid white;
                     }
            </style>

        		<table align = "center" class="table table-hover">
              <tr>
                <th>Izena</th>
                <th>Herrialdea</th>
                <th>Mota</th>
                <th>Kainoia</th>
                <th>Serbitzu Urtea</th>
                <th>Kantitate Sortuak</th>
                <th>Pisua</th>
                <th>Blindaje</th>
                <th>Arma Printzipala</th>
                <th>Arma Sekundarioa</th>
                <th> Kostua </th>
                <th>Fabrikantea</th>
                <th>Ezabatu</th>
              </tr>

        			<?php
        				while($row = mysqli_fetch_array($result))
        				{
        					printf("
        							<tr>
        								<td>%s</td>
        								<td>%s</td>
        								<td>%s</td>
        								<td>%s</td>
        								<td>%s</td>
                        <td>%s</td>
        								<td>%s</td>
        								<td>%s</td>
        								<td>%s</td>
        								<td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td><a href =\"borrar/ezabatu.php?id=%s\"><img src=\"img/Borrar.png\" width=\"20\" /></a></td>
        							</tr>
        						" , $row["Nombre"], $row["Pais"], $row["Tipo"], $row["CalCanon"], $row["Anodeservicio"], $row["Cantidadcreados"], $row["Peso"], $row["Blindaje"], $row["ArmaPrimaria"], $row["ArmaSecundaria"],$row["CostePorUnidad"],$row["Fabri"],$row["Nombre"]);
        				}
        					mysqli_free_result($result);
        			?>
        		</table>


            <section class="page-section about-heading">

              <form action="borrar/GehituArma.php" method="post">

                <h1 align ="center"> Armen Erregistroak Gehitu </h1>

                <div align="center">
                    <input type="text" id="Izena" name="Izena" placeholder="Izena"/>
                </div>

                <div>
                    <input type="text" id="Herrialdea" name="Herrialdea" placeholder="Herrialdea"/>
                </div>

                <div>
                    <input type="text" id="Tipo" name="Urtea" placeholder="Urtea"/>
                </div>

                <div>
                    <input type="text" id="kainoia" name="Kostua" placeholder="Kostua"/>
                </div>

                <div>
                    <input type="text" id="kainoia" name="Fabri" placeholder="Fabrikantea"/>
                </div>

            <!-- sirve para hacer un comentario
                <div>
                    <textarea id="msg" name="user_message" placeholder="Informazioa"></textarea>
                </div>
            -->
                <div class="button" align="left">
                    <button type="submit">Gehitu</button>
                    <button type="reset">Reset</button>
                </div>

            </form>

            </section>

            <!--CSS-->
            <style type = "text/css">

            form {
            /* Sólo para centrar el formulario a la página */
            margin: 0 auto;
            width: 400px;
            /* Para ver el borde del formulario */
            padding: 1em;
            border: 1px solid #CCC;
            border-radius: 1em;
            }

            form div + div {
            margin-top: 1em;
            text-align: center;
            color: #FFFFFF;
            }

            label {
            /* Para asegurarse que todos los labels tienen el mismo tamaño y están alineados correctamente */
            display: inline-block;
            width: 90px;
            text-align: right;
            color: #FFFFFF;
            }

            input, textarea {
            /* Para asegurarse de que todos los campos de texto tienen las mismas propiedades de fuente
               Por defecto, las areas de texto tienen una fuente con monospace */
            font: 1em sans-serif;

            /* Para darle el mismo tamaño a todos los campos de texto */
            width: 300px;
            -moz-box-sizing: border-box;
            box-sizing: border-box;

            /* Para armonizar el look&feel del borde en los campos de texto */
            border: 1px solid #999;
            }

            input:focus, textarea:focus {
            /* Para dar un pequeño destaque en elementos activos*/
            border-color: #000;
            }

            textarea {
            /* Para alinear campos de texto multilínea con sus labels */
            vertical-align: top;

            /* Para dar suficiente espacio para escribir texto */
            height: 5em;

            /* Para permitir a los usuarios cambiar el tamaño de cualquier textarea verticalmente
                No funciona en todos los navegadores */
            resize: vertical;
            }

            .button {
            /* Para posicionar los botones a la misma posición que los campos de texto */
            padding-left: 0px; /* mismo tamaño a todos los elementos label */
            }
            button {
            /* Este margen extra representa aproximadamente el mismo espacio que el espacio
               entre los labels y sus campos de texto */
            margin-left: .9em;
            }

            </style>

            <?php

              $result=mysqli_query($link,"select * from armak");
            ?>

            <style type="text/css">
                     table tr td{
                       border: 1px solid white;
                       text-align: center;
                     }
                     table tr th{
                       border: 1px solid white;
                       text-align: center;
                     }
                     table{
                       border: 3px solid white;
                     }
            </style>

            <table align = "center" class="table table-hover">
              <tr>
                <th>Izena</th>
                <th>Herrialdea</th>
                <th>Urtea</th>
                <th>Kostua</th>
                <th>Fabrikantea</th>
                <th>Ezabatu </th>
              </tr>

              <?php
                while($row = mysqli_fetch_array($result))
                {
                  printf("
                      <tr>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td><a href =\"borrar/ezabatuArma.php?Izena=%s\"><img src=\"img/Borrar.png\" width=\"20\" /></a></td>
                      </tr>
                    " , $row["Izena"], $row["Herrialdea"], $row["Urtea"], $row["Kostua"],$row["Fabri"],$row["Izena"]);
                }
                  mysqli_free_result($result);
              ?>
            </table>

            <br><br>
            <p align="center">----------------------------------------------------------------------</p>
            <h1 align="center"> Usuarioak </h1>
            <br>

            <?php

              $result=mysqli_query($link,"select * from users");

            ?>
            <table align = "center" class="table table-hover">
              <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Password</th>
              </tr>

              <?php
                while($row = mysqli_fetch_array($result))
                {
                  printf("
                      <tr>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td><a href =\"borrar/ezabatuUsers.php?email=%s\"><img src=\"img/Borrar.png\" width=\"20\" /></a></td>
                      </tr>
                    " , $row["id"], $row["email"], $row["password"], $row["email"]);
                }
                  mysqli_free_result($result);
                  mysqli_close($link);
              ?>
            </table>

        <footer>
          <div>
            <p></p>
          </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      </body>

    </html>
