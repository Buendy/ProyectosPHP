<?php include('funciones.php')?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

    <?php

    $errores = [];
    $dataArray = [];
    session_start();
    if(!isset($_SESSION['rol']['roldeusuario'])){

      volver();

    }elseif($_SESSION['rol']['roldeusuario'] != 'profesor'){

      volver();

    }else{

    if (!$_POST) {


      include('form.php');


    } else {

      include('validaciones.php');


      if($errores) {
        include('form.php');
      } else {
        $insertar = new Dbpdo();
        $dataArray = ['pass'=> md5($_POST['clave1']), 'nombre' => $_POST['nombre'], 'apellidos' => $_POST['apellidos'],
                      'email' => $_POST['email'], 'telefono' => $_POST['telefono'], 'rol' => $_POST['rol'], 'nick' => $_POST['nick'],
                      'dni' => $_POST['dni'], 'archivo' => $carpeta . $_POST['email'] . '.jpg'];
                      //echo $dataArray['nick'];

        $insertar->insertUser('users', $dataArray);

        $destino = $carpeta . $_POST['email'] . '.jpg';
        if(!move_uploaded_file($_FILES['archivo']['tmp_name'], $destino)) {
          echo 'Fallo al cargar el archivo';
        }
        echo '<p class="centrado">Correcto, usuario creado<br>';
        echo '<a class="centrado"href="public.php">Volver a la página principal</a></p><br>';



      }

    }

  }


     ?>

  </body>
</html>
