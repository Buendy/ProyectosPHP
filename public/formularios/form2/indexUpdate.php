<?php include_once('funciones.php')?>
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



    if($_POST['enviar'] == 'borrar'){

    }else{



    if (!$_POST) {


      header("Location:administracion.php");


    } else {
      if(!isset($_POST['submit'])){
        include('formUpdate.php');
      }else{
        include('validacionesUpdate.php');





      if($errores) {
        include('formUpdate.php');
      } else {

        include_once('./lib/Dbpdo.php');
        $update = new Dbpdo();
        $dataArray = ['nick' => $_POST['nick'], 'nombre' => $_POST['nombre'], 'apellidos' => $_POST['apellidos'], 'email' => $_POST['email'],
         'telefono' => $_POST['telefono'], 'dni' => $_POST['dni'], 'rol' => $_POST['rol'], 'id' => $_POST['id']];


        $update->updateUsers('users', $dataArray);

        echo '<p class="centrado">Correcto, usuario actualizado</p><br>';
        echo '<a class="centrado"href="public.php">Volver a la página principal</a><br>';

        }

      }

    }
        }




     ?>

  </body>
</html>
