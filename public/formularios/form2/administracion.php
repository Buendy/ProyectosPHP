<?php include_once('./funciones.php')?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administración</title>
  </head>
  <body>



    <?php
    session_start();

    if(!isset($_SESSION['rol']['roldeusuario']) || $_SESSION['rol']['roldeusuario'] != 'profesor'){
        volver();
    }else{


      include('viewusuarios.php');
      echo '<p class="centrado">';
      echo '<a  href="index.html" class="btn btn-success">Volver a la página principal</a><br><br>';
      echo '<a  href="logout.php" class="btn btn-success">Cerrar sesión</a><br>';
      echo '</p>';
    }



     ?>

  </body>
</html>
