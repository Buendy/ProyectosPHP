<?php

include('Validacion.php');
$errores = [];
$validaciones = new Validacion();
$_POST['nombre'] = '<script>hosada"adsad</script>';
$_POST['nick'] = 'hol@';



if(!isset($_POST['nick'])){
  $errores['nick'] = 'No he recibido el nick';
}else{
  $value = $validaciones->validaNick('nick');
  if($value){
    $errores['nick'] = $value;
  }
}


Validacion::formateaDatos('nombre');
var_dump($_POST['nick']);
var_dump($errores['nick']);
var_dump($_POST['nombre']);

?>
