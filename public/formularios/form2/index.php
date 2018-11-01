<?php include('funciones.php') ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title
  </head>
  <body>

    <?php
    spl_autoload_register(function($clave){
      $archivo = $clave . '.php';
      include $archivo;
    });
    $errores = [];
    $dataArray = [];
    session_start();
    if(isset($_SESSION['user']['name'])){
      echo 'Ya estás logueado como: ' . $_SESSION['user']['name'] . '<br>';
      echo '<a href="public.php">Volver a la página principal</a><br>';
      echo '<a href="logout.php">Cerrar sesión</a><br>';

    }else{

    if (!$_POST) {


      include('form.php');


    } else {

      include('validaciones.php');


      if($errores) {
        include('form.php');
      } else {
        $insertar = new Dbpdo();
        $dataArray = ['pass'=> md5($_POST['clave1']), 'name' => $_POST['nombre'], 'apellidos' => $_POST['apellidos'],
                      'email' => $_POST['email'], 'telefono' => $_POST['telefono'], 'rol' => $_POST['rol'], 'nick' => $_POST['nick'],
                      'dni' => $_POST['dni'], 'archivo' => $carpeta . $_POST['email'] . '.jpg'];
                      //echo $dataArray['nick'];

        $insertar->insertUser($dataArray);




      }

    }

  }


     ?>

  </body>
</html>
