<?php

// $tam_max = 2 * 1024 * 1024; //declaramos como tam maximo 2 MB
$carpeta = "./uploads/";
include_once('./lib/Dbpdo.php');
include_once('Validacion.php');
include_once('funciones.php');


$validaciones = new Validacion();
$conexion = new Dbpdo();

  if(!isset($_POST['nick'])){
    $errores['nick'] = 'No he recibido el nick';
  }else{
    Validacion::formateaDatos('nick');
    $value = $validaciones->validaNick('nick');
    if($value){
      $errores['nick'] = $value;
    }elseif(!$check = $conexion->checkRepeatUpdate('users', 'nick')){
        $errores['nick'] = 'El nick ya está registrado';
      }
  }

  if (!isset($_POST['nombre'])){
    $errores['nombre'] = 'No he recibido el nombre<br>';
  } else{
    Validacion::formateaDatos('nombre');
    $value = $validaciones->validaNombre('nombre');
    if($value){
    $errores['nombre'] = $value;
    }
  }

  if (!isset($_POST['apellidos'])){
    $errores['apellidos'] = 'no he recibido los apellidos';
  } else{
    Validacion::formateaDatos('apellidos');
    $value = $validaciones->validaApellidos('apellidos');
    if($value){
    $errores['apellidos'] =  $value;
    }
  }


  if(!isset($_POST['telefono'])){
    $errores['telefono'] = 'No he recibido un número de teléfono<br>';
  }else{
    Validacion::formateaDatos('telefono');
    $value = $validaciones->validaTelefono('telefono');
    if($value){
    $errores['telefono'] = $value;
    }
  }

  if(!isset($_POST['email'])){
    $errores['email'] = 'El he recibido el email<br>';
  } else{
    Validacion::formateaDatos('email');

    $value = $validaciones->validaEmail('email');
    if($value){
      $errores['email'] = $value;
    }elseif(!$check = $conexion->checkRepeatUpdate('users', 'email')){
        $errores['email'] = 'El email ya está registrado';
        }
  }



  if(!isset($_POST['dni'])){
    $errores['dni'] = 'No he recibido el email';
  } else {
    Validacion::formateaDatos('dni');
    $value = $validaciones->validaDni('dni');
    if($value){
      $errores['dni'] = $value;
    }
  }

  if(!isset($_POST['rol'])){
    $errores['rol'] = 'No he recibido el tipo de usuario2';
  }else{
    Validacion::formateaDatos('rol');
    $value = $validaciones->validaRol('rol');
    if($value){
      $errores['rol'] = $value;
    }

  }
