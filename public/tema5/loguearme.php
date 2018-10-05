<?php session_start() ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Página de Autenticación</title>
  </head>
  <body>

<h1>Ya estás logueado</h1>
<?php $_SESSION['user']['name'] = 'Daniel' ?>

<h2>Con el nombre: <?= $_SESSION['user']['name']?> </h2>

<a href="inicio.php">Regresar a la página principal</a>
<br>
<a href="logout.php">Cerarr sesión</a>


  </body>
</html>
