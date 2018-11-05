<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./estilos.css">
  </head>
  <body>


    <?php

    session_start();
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
        echo '<a href="administracion.php">administración</a> <br>';
        echo '</p>';
      }
      echo '<p class="centrado">';
      echo '<a  href="public.php">Volver a la página principal</a><br>';
      echo '<a  href="logout.php">Cerrar sesión</a><br>';
      echo '</p>';


    }else{

      echo '<p class="centrado">';
      echo 'Estás accediendo a un área restringinda, debes de iniciar sesión para verla';
      echo '<a href="login.php" class="centrado">Iniciar sesión</a>';
      echo '</p>';


    }



     ?>

  </body>
</html>
