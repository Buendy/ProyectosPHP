<?php include('funciones.php') ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
  </head>
  <body>

    <?php
    $errores = [];

    if (!$_POST) {


      include('form.php');


    } else {

      include('validaciones.php');

      if($errores) {
        include('form.php');
      } else {
        echo 'Todo correcto, registro completado';
      

      }

    }


     ?>

  </body>
</html>
