<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <img src="">

    <?php

    session_start();
    if(isset($_SESSION['user']['name'])){
      echo 'Ya estás logueado como: ' . $_SESSION['user']['name'] . '<br>';
      echo '<a href="public.php">Volver a la página principal</a><br>';
      echo '<a href="logout.php">Cerrar sesión</a><br>';


    }else{

      echo '<p class="centrado">';
      echo 'Estás accediendo a un área restringinda, debes de iniciar sesión para verla';
      echo '</p>';
      echo '<p class="centrado">';
      echo '<a href="login.php">Iniciar sesión</a>';
      echo '</p>';

    }



     ?>

  </body>
</html>
