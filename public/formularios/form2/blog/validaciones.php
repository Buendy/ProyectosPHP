<?php
include_once('../Validacion.php');
$validaciones = new Validacion();

if(!isset($_POST['id'])){
  $errores['id'] = 'Ha ocurrido un error, no se ha actualizado';
}else{
  Validacion::formateaDatos('id');
}

if(!isset($_POST['titulo'])){
  $errores['titulo'] = 'No he recibido el titulo';
}else{
  Validacion::formateaDatos('titulo');

  $value = $validaciones->validaTitulo('titulo');

}if($value){
  $errores['titulo'] = $value;
}

if(!isset($_POST['cuerpo'])){
  $errores['cuerpo'] = 'No he recibido el cuerpo';
}else{
  Validacion::formateaDatos('cuerpo');

  $value = $validaciones->validaCuerpo('cuerpo');

}if($value){
  $errores['cuerpo'] = $value;
}





 ?>
