<?php include('funciones.php');?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>

    <?php
    $errores = [];

    session_start();
    if(isset($_SESSION['user']['name'])){
      echo 'Ya estás logueado como: ' . $_SESSION['user']['name'] . '<br>';
      echo '<a href="public.php">Volver a la página principal</a><br>';
      echo '<a href="logout.php">Cerrar sesión</a><br>';
    }else{

      if (!$_POST) {

        include('formLogin.php');

      } else {

        include('validacionesLogin.php');

      }
    }



     ?>

  </body>
</html
