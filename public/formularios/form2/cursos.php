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
      echo 'Bienvenido: ' . $_SESSION['user']['name'] . '<br>';
      $image = $_SESSION['archivo']['imagendeusuario'];
      echo "<img src=\"$image\" class=\"centrado\" width=\"100\" height=\"100\"> <br>";

      if($_SESSION['rol']['roldeusuario'] == 'profesor'){
        echo '<a href="administracion.php">administración</a> <br>';
      }

      echo '<a class="centrado" href="public.php">Volver a la página principal</a><br>';
      echo '<a class="centrado" href="logout.php">Cerrar sesión</a><br>';



    }else{

      echo '<p class="centrado">';
      echo 'Estás accediendo a un área restringinda, debes de iniciar sesión para verla';
      echo '</p>';
  
      echo '<a href="login.php" class="centrado">>Iniciar sesión</a>';


    }



     ?>

  </body>
</html>
