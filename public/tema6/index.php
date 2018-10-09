<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularios usables</title>
    <link rel="stylesheet" href="estilos.css">

  </head>
  <body>
    <h1>Formularios usables</h1>

    <?php

      include('funciones.php');
      $errores = [];

    if ( ! $_POST ) { //SI NO HAY DATOS LLAMA AL FORMULARIO

      include('formulario.php');

     } else { //PROCESAMOS EL FORMULARIO

      include('validacion.php');


      if ( $errores ){
            include 'formulario.php';

      }else {
        echo 'Todo correcto, usuario registrado';
      }
    }

    ?>

  </body>
</html>
