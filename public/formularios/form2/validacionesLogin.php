
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
  include('./models/Users.php');
  $rol = new Users();
  echo '<p class="centrado">Correcto, has iniciado sesión </p><br>';

  $result = $rol->getRolImage('users', 'email');

  $_SESSION['rol']['roldeusuario'] = $result[0]['rol'];
  $_SESSION['archivo']['imagendeusuario'] = $result[0]['archivo'];
  $_SESSION['user']['name'] = $_POST['email'];
  $_SESSION['idUsuarioConSesionIniciada'] = $result[0]['id'];
  


  echo "<a href=\"index.html\" class=\"centrado btn btn-success\">Volver a la página principal</a><br><br>";
  echo "<a href=\"logout.php\" class=\"centrado btn btn-success\">Cerrar sesión</a><br><br>";



}

 ?>

</body>
</html>
