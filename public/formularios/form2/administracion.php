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

    if(!isset($_SESSION['rol']['roldeusuario'])){
        volver();
    }elseif($_SESSION['rol']['roldeusuario'] != 'profesor'){
        volver();
    }else{
      echo '<p class="centrado">';
      echo 'Bienvenido profesor: ' . $_SESSION['user']['name'] . '<br>';

      include('viewusuarios.php');
      echo '<p class="centrado">';
      echo '<a  href="public.php">Volver a la página principal</a><br>';
      echo '<a  href="logout.php">Cerrar sesión</a><br>';
      echo '</p>';
    }



     ?>

  </body>
</html>
