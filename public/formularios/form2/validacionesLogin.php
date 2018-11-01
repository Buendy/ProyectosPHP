<?php
include('Validacion.php');
$validaciones = new Validacion();
if(empty($_POST['correo'])){
  $errores['correo'] = 'No he recibido el correo';
}else{
  Validacion::formateaDatos('correo');
  if(!$validaciones->comprobarRepeticion('correo', 'usuarios.txt')){
    $errores['correo'] = 'usuario incorrecto';
  }
}

if(empty($_POST['clave'])){
  $errores['clave'] = 'No he recibido la contraseña';
} else {
  $_POST['clave'] = Validacion::formateaDatos('clave');
  $_POST['clave'] = md5($_POST['clave']);
  if(!$validaciones->comprobarPassword('correo', 'clave', 'usuarios.txt')){
    $errores['clave'] = 'Contraseña incorrecta';
  }
}

if($errores) {
  include('formLogin.php');
} else {
  echo 'Correcto, has iniciado sesión <br>';

  $_SESSION['user']['name'] = $_POST['correo'];
  echo '<a href="public.php">Volver a la página principal</a><br>';
  echo '<a href="logout.php">Cerrar sesión</a><br>';




}

 ?>
