<?php

  if(!isset($_POST['nick'])){
    $errores['nick'] = 'No he recibido el nick';
  }else{
    $value = validaNick('nick');
    if($value){
      $errores['nick'] = $value;
    }
  }

  if (!isset($_POST['nombre'])){
    $errores['nombre'] = 'No he recibido el nombre<br>';
  } else{
    $value = validaNombre('nombre');
    if($value){
    $errores['nombre'] = $value;
    }
  }

  if (!isset($_POST['apellidos'])){
    $errores['apellidos'] = 'no he recibido los apellidos';
  } else{
    $value = validaApellidos('apellidos');
    if($value){
    $errores['apellidos'] =  $value;
    }
  }


  if(!isset($_POST['telefono'])){
    $errores['telefono'] = 'No he recibido un número de teléfono<br>';
  }else{
    $value = validaTelefono('telefono');
    if($value){
    $errores['telefono'] = $value;
    }
  }

  if(!isset($_POST['email'])){
    $errores['email'] = 'El he recibido el email<br>';
  } else{
    $value = validaEmail('email');
    if($value){
    $errores['email'] = $value;
    }
  }

  if(!isset($_POST['clave1']) || ! isset($_POST['clave2'])){
    $errores['clave'] = 'No he recibido ambas claves<br>';
  } else {

    $value = validaPass('clave1', 'clave2');
    if($value){
      $errores['clave'] = $value;
    }

  }

  if(!isset($_POST['dni'])){
    $errores['dni'] = 'No he recibido el email';
  } else {
    $value = validaDni('dni');
    if($value){
      $errores['dni'] = $value;
    }
  }

  if(!isset($_POST['rol'])){
    $errores['rol'] = 'No he recibido el tipo de usuario';
  }else{

    $value = validaRol('rol');
    if($value){
      $errores['rol'] = $value;
    }

  }



 ?>
