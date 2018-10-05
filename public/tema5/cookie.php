<?php

$duración = time() + (60*60*24*365*2);

setcookie('nombre', 'Daniel');
setcookie('edad', '28');

$datos = ['web'=> 'iescierva.net', 'director'=> 'José Antonio'];

setcookie('especial', serialize($datos), $duracion);

 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejemplo de Cookies</title>
  </head>
  <body>
    <h1>Hola <?= $_COOKIE['nombre'] ?></h1>
    <h2>Tu edad es <strong> <?= $_COOKIE['edad']?> años </strong>   </h2>

<h3> Los datos almacenados son: <br>
  <?php

 $datos = unserialize($_COOKIE['especial']);
var_dump($datos);
 ?>
<br>
<?php

//var_dump($_COOKIE);
 ?>

</h3>


  </body>
</html>
