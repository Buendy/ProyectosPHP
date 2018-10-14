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
        echo 'Todo correcto, registro completado';

        $archivo = 'usuarios.txt';
        $fuente = fopen($archivo, "a+");

        if(is_writable($archivo)){

          $usuario = md5($_POST['clave1']) . ' : ' . $_POST['nombre'] . ' : ' . $_POST['apellidos']
                  . ' : ' . $_POST['email'] . ' : ' . $_POST['telefono'] . ' : ' . $_POST['rol'];
          fwrite($fuente, "$usuario\n");
          fclose($fuente);
        } else {
          echo 'los datos introducidos no son correctos<br>';
        }


      }

    }

  }


     ?>

  </body>
</html>
