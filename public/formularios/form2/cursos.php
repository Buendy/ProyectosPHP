<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">

  </head>

  <body>

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
        <li class="nav-text">
          <a class="nav-link botones " href="login.php">Iniciar sesión</a>
        </li>

      </ul>
    </div>
  </nav>

  <div class="row nav">
    <div class="col-md-1" id="lateral">
      <a class="nav-link botoneslateral" href="cursos.php">Cursos</a>

    <?php
    session_start();
    if(isset($_SESSION['rol']['roldeusuario']) && $_SESSION['rol']['roldeusuario'] == 'profesor'){

      echo '<a href="viewusuarios.php" class="nav-link botoneslateral">Administración</a> <br>';

    }

    ?>

      </div>


    <div class="col-md-11">


    <?php


    if(isset($_SESSION['user']['name'])){
      echo '<p class="centrado">';
      echo 'Bienvenido: ' . $_SESSION['user']['name'] . '<br>';
      echo '</p>';
      $image = $_SESSION['archivo']['imagendeusuario'];
      echo '<p class="centrado">';
      echo "<img src=\"$image\" class=\"centrado\" width=\"100\" height=\"100\"> <br>";
      echo '</p>';

      if($_SESSION['rol']['roldeusuario'] == 'profesor'){
        echo '<p class="centrado">';
        echo '<a href="viewusuarios.php">administración</a> <br>';
        echo '</p>';
      }
      echo '<p class="centrado">';
      echo '<a  href="index.html">Volver a la página principal</a><br>';
      echo '<a  href="logout.php">Cerrar sesión</a><br>';
      echo '</p>';


    }else{

      echo '<p class="centrado"><br><br><br>';
      echo 'Estás accediendo a un área restringinda, debes de iniciar sesión para verla';

      echo '</p>';
      echo '<p class="centrado">';
      echo '<a href="login.php" class="centrado btn btn-success">Iniciar sesión</a>';
      echo '</p>';


    }



     ?>

   </div>
   </div>



 <footer class="pie">
  <p class="centrado">Creado por:
   <a href="mailto:danielbuendiasmr@gmail.com" id="btnfooter">Daniel buendia</a>.</p>
</footer>

<script src="./js/jquery-3.3.1.min.js"></script>
<script src="./js/popper.js"></script>
<script src="./js/bootstrap.min.js"></script>
  </body>
</html>
