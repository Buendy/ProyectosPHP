<?php


function mostrarErrorCampo($campo, $errores){
  if(isset($errores[$campo])){
    echo '<span clas="listaErrores">' . $errores[$campo] . '</span>';
  }
}


function mostrarCampo($campo){
  if(isset($_POST[$campo])){
    echo 'value="' . $_POST[$campo] . '"';
  }
}



function validaNombre($campo){

  if ( isset($_POST[$campo])){

    $_POST[$campo] = formateaCampo($campo);

    if(strlen($_POST[$campo]) < 4){
      return 'El nombre es demasiado corto<br>';
    }elseif(preg_match("/[^a-zA-Z'áéíóúàèìòùäëïöüÁÉÍÓÚÀÈÌÒÙÄËÏÖÜ]/", $_POST[$campo])){
      return 'El nombre no puede contener números o caracteres especiales';
    }else {
      return null;
    }
  } else {
    return 'No he recibido el nombre';
  }
}



/*
*
*/
function validaApellidos($campo){

  if(isset($_POST[$campo])){

    $_POST[$campo] = formateaCampo($campo);

    if(strlen($_POST[$campo]) < 4){
      return 'El apellido es demasiado corto<br>';
    } elseif(preg_match("/[^a-zA-Z'áéíóúàèìòùäëïöüÁÉÍÓÚÀÈÌÒÙÄËÏÖÜ]/", $_POST[$campo])){
      return 'El apellido no puede contener números o caracteres especiales';
    }else {
      return null;
    }

  } else {
    return 'No he recibido el apellido';
  }

}




function validaTelefono($campo){

  if(isset($_POST[$campo])){

    $_POST[$campo] = formateaCampo($campo);

    if(strlen($_POST[$campo]) < 9 || strlen($_POST[$campo]) > 9  ){
      return 'El número de teléfono introducido no es correcto';
    }elseif(preg_match("/[^\d]/", $_POST[$campo])){
      return 'El número introducido no es correcto';
    } else {
      return null;
    }
  } else {
    return 'No he recibido el teléfono';
  }

}




function validaEmail($campo){ //Se valida el email para que tenga el formato correcto

  if (isset($_POST[$campo])){
    $_POST[$campo] = formateaCampo($campo);
    if(strlen($_POST[$campo]) < 6){
      return 'El email es demasiado corto';
    }elseif(!preg_match_all('/^[a-zA-Z\d-_*\.]+@[a-zA-Z\d-_*\.]+\.[a-zA-Z\d]{2,}$/', $_POST[$campo])){
      return 'El email no es correcto';
    }elseif(comprobarEmail($campo, 'usuarios.txt')){
      return 'El eamil ya está registrado';
    }else {
      return null;
    }
  } else {
    return 'No he recibido el email';
  }

}



function validaPass($campo1, $campo2){

if(isset($_POST[$campo1]) || isset($_POST[$campo2])){
  $_POST[$campo1] = formateaCampo($campo1);

    if(strlen($_POST['clave1']) < 8){
      return 'La contraseña debe de tener al menos 8 caracteres';
    }elseif(preg_match("/^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8}$/", $campo1)){
    return 'El formato no es correcto, Debe tener 1 minúscula, 1 mayúscula y 1 número';
  }elseif($_POST['clave1'] != $_POST['clave2']){
    return 'Las contraseñas no coinciden';
  } else {
      return null;
    }

  } else {
    return 'No he recibido ambas claves';
  }

}



function comprobarEmail($campo, $archivo){
  $array = file($archivo);

  foreach ($array as $value) {
    $datos = explode(' : ', $value);
    if(isset($datos[3] )){
      if($datos[3] == $_POST[$campo]){
      return true;
      }
    }
  }
 return false;
}

function comprobarPassword($campo1, $campo2, $archivo){
  $array = file($archivo);
  foreach ($array as $value) {
    $datos = explode(' : ', $value);
    if(isset($datos[3])){

      if($datos[3] == $_POST[$campo1]){
        if($datos[0] == $_POST[$campo2]){
            return true;
          }

      }
    }
  }
 return false;
}



function formateaCampo($campo){
if ( isset($_POST[$campo])){
  $_POST[$campo] = trim($_POST[$campo]);
  $_POST[$campo] = strip_tags($_POST[$campo]);
  $_POST[$campo] = preg_replace("/\"/",'', $_POST[$campo]);
  return $_POST[$campo];
}

}

 ?>
