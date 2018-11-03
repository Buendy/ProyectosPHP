
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title
  </head>
  <body>


<?php
include('Validacion.php');
include('./lib/Dbpdo.php');


$validaciones = new Validacion();
$conexion = new Dbpdo();
if(empty($_POST['email'])){
  $errores['email'] = 'No he recibido el email';
}else{
  Validacion::formateaDatos('email');
  if(!$check = $conexion->checkRepeat('users', 'email')){
    $errores['email'] = 'usuario incorrecto';
  }elseif(empty($_POST['pass'])){
    $errores['pass'] = 'No he recibido la contraseña';
  } else {
    $_POST['pass'] = Validacion::formateaDatos('pass');
    $_POST['pass'] = md5($_POST['pass']);
    if(!$check = $conexion->checkRepeatPass('users', 'email', 'pass')){
      $errores['pass'] = 'Contraseña incorrecta';
    }
  }
}



if($errores) {
  include('formLogin.php');
} else {
  echo '<p class="centrado">Correcto, has iniciado sesión </p><br>';

  $result = $conexion->getRolImage('users', 'email');

  $_SESSION['rol']['roldeusuario'] = $result[0]['rol'];
  $_SESSION['archivo']['imagendeusuario'] = $result[0]['archivo'];
  $_SESSION['user']['name'] = $_POST['email'];


  echo "<a href=\"public.php\" class=\"centrado\">Volver a la página principal</a><br>";
  echo "<a href=\"logout.php\" class=\"centrado\">Cerrar sesión</a><br>";




}

 ?>

</body>
</html>
