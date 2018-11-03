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
      echo '<p class="centrado">';
      echo 'Estás accediendo a un área restringinda, debes de iniciar sesión para verla';
      echo '</p>';
      echo '<p class="centrado">';
      echo '<a class="centrado" href="public.php">Volver a la página principal</a><br>';
      echo '</p>';
    }elseif($_SESSION['rol']['roldeusuario'] != 'profesor'){
      echo '<p class="centrado">';
      echo 'Estás accediendo a un área restringinda, debes ser profesor para entrar';
      echo '<a class="centrado" href="public.php">Volver a la página principal</a><br>';
      echo '<a class="centrado" href="logout.php">Cerrar sesión</a><br>';
      echo '</p>';
    }else{
      echo '<p class="centrado">';
      echo 'Bienvenido profesor: ' . $_SESSION['user']['name'] . '<br>';

      include('viewusuarios.php');

      echo '<a class="centrado" href="public.php">Volver a la página principal</a><br>';
      echo '<a class="centrado" href="logout.php">Cerrar sesión</a><br>';
      echo '</p>';
    }



     ?>

  </body>
</html>
