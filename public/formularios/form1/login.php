<?=include('funciones.php');?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>

    <?php
    $errores = [];

    if (!$_POST) {


      include('formLogin.php');


    } else {

      if(empty($_POST['correo'])){
        $errores['correo'] = 'No he recibido el correo';
      }else{

        if(!comprobarEmail('correo', 'usuarios.txt')){
          $errores['correo'] = 'usuario incorrecto';
        }
      }

      if(empty($_POST['clave'])){
        $errores['clave'] = 'No he recibido la contraseña';
      } else {
        $_POST['clave'] = md5($_POST['clave']);
        if(!comprobarPassword('correo', 'clave', 'usuarios.txt')){
          $errores['clave'] = 'Contraseña incorrecta';
        }
      }

      if($errores) {
        include('formLogin.php');
      } else {
        echo 'Correcto, has iniciado sesión';




      }

    }


     ?>

  </body>
</html
