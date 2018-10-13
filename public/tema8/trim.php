<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Trim</title>
  </head>
  <body>

    <?php

    if($_POST){
      if(!empty($_POST['nombre'])){
        $_POST['nombre'] = trim($_POST['nombre']);
        if (strlen($_POST['nombre']) < 3){
          echo 'No es válido el nombre';
        } else {
          echo 'El nombre es válido';
          echo 'El nombre es ' . $_POST['nombre'];
        }
      } else {
        echo 'No he recibido el nombre';
      }
    }
     ?>

     <form class="" action="<?= $_SERVER['PHP_SELF']?>" method="post">
       Nombre: <input type="text" name="nombre" value="">
       <br>
       <input type="submit" name="" value="Enviar">
     </form>

  </body>
</html>
