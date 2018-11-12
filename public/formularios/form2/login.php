<?php include('funciones.php')?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Login</title>
  </head>
  <body id="bodylogin">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#" id="cabeceralateral">Form 1.0</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link botones" href="index.html">Inicio</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link botones" href="index.php">registrarse</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link botones " href="login.php">Iniciar sesión</a>
        </li>
        
      </ul>
    </div>
  </nav>
    <br><br><br><br><br>


<div class="row">
  <div class="col-md-5">

  </div>
  <div class="col-md-2 centrado" id="cuadrologin">
    <?php
    $errores = [];

    session_start();
    if(isset($_SESSION['user']['name'])){
      echo 'Ya estás logueado como: ' . $_SESSION['user']['name'] . '<br><br>';
      echo '<a href="index.html" class="btn btn-success">Volver a la página principal</a><br><br>';
      echo '<a href="logout.php" class="btn btn-success">Cerrar sesión</a><br>';
    }else{

      if (!$_POST) {

        include('formLogin.php');

      } else {

        include('validacionesLogin.php');

      }
    }



     ?>

  </div>
  <div class="col-md-5">

  </div>
</div>



     <script src="./js/jquery-3.3.1.min.js"></script>
     <script src="./js/popper.js"></script>
     <script src="./js/bootstrap.min.js"></script>
  </body>
</html
