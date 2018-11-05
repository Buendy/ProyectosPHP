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

function volver(){
  header('Location:./public.php');
}




// function validaNick($campo){
//   if(isset($_POST['nombre'])){
//     $_POST[$campo] = formateaCampo($campo);
//
//     if(strlen($_POST[$campo]) > 10 || strlen($_POST[$campo]) < 4  ){
//       return 'El nick debe tener entre 4 y 10 caracteres';
//     }elseif(preg_match("/[^a-zA-Z'áéíóúàèìòùäëïöüÁÉÍÓÚÀÈÌÒÙÄËÏÖÜ_\d]/", $_POST[$campo])){
//       return 'El nick solo puede contener letras, -_\' y algún número';
//     }elseif(comprobarRepeticion($campo, 'usuarios.txt')){
//       return 'El nick ya está registrado';
//     }else {
//       return null;
//     }
//
//   }else {
//     return 'No he recibido el nick';
//   }
// }
//
//
//
// function validaNombre($campo){
//
//   if ( isset($_POST[$campo])){
//
//     $_POST[$campo] = formateaCampo($campo);
//
//     if(strlen($_POST[$campo]) < 4){
//       return 'El nombre es demasiado corto<br>';
//     }elseif(preg_match("/[^a-zA-Z'áéíóúàèìòùäëïöüÁÉÍÓÚÀÈÌÒÙÄËÏÖÜ]/", $_POST[$campo])){
//       return 'El nombre no puede contener números o caracteres especiales';
//     }else {
//       return null;
//     }
//   } else {
//     return 'No he recibido el nombre';
//   }
// }
//
//
//
// /*
// *
// */
// function validaApellidos($campo){
//
//   if(isset($_POST[$campo])){
//
//     $_POST[$campo] = formateaCampo($campo);
//
//     if(strlen($_POST[$campo]) < 4){
//       return 'El apellido es demasiado corto<br>';
//     } elseif(preg_match("/[^a-zA-Z'áéíóúàèìòùäëïöüÁÉÍÓÚÀÈÌÒÙÄËÏÖÜ]/", $_POST[$campo])){
//       return 'El apellido no puede contener números o caracteres especiales';
//     }else {
//       return null;
//     }
//
//   } else {
//     return 'No he recibido el apellido';
//   }
//
// }
//
//
//
//
// function validaTelefono($campo){
//
//   if(isset($_POST[$campo])){
//
//     $_POST[$campo] = formateaCampo($campo);
//
//     if(strlen($_POST[$campo]) < 9 || strlen($_POST[$campo]) > 9  ){
//       return 'El número de teléfono introducido no es correcto';
//     }elseif(!preg_match('/^[8|9|6|7][\d]{8}$/', $_POST[$campo])){
//       return 'El número introducido no es correcto';
//     } else {
//       return null;
//     }
//   } else {
//     return 'No he recibido el teléfono';
//   }
//
// }
//
//
// //!preg_match_all('/^[a-zA-Z\d-_*\.]+@[a-zA-Z\d-_*\.]+\.[a-zA-Z\d]{2,}$/', $_POST[$campo])
// //!filter_var($_POST[$campo], FILTER_VALIDATE_EMAIL)
//
// function validaEmail($campo){ //Se valida el email para que tenga el formato correcto
//
//   if (isset($_POST[$campo])){
//     $_POST[$campo] = formateaCampo($campo);
//     if(strlen($_POST[$campo]) < 6){
//       return 'El email es demasiado corto';
//     }elseif(!preg_match_all('/^[a-zA-Z\d-_*\.]+@[a-zA-Z\d-_*\.]+\.[a-zA-Z\d]{2,}$/', $_POST[$campo])){
//       return 'El email no es correcto';
//     }elseif(comprobarRepeticion($campo, 'usuarios.txt')){
//       return 'El email ya está registrado';
//     }else {
//       return null;
//     }
//   } else {
//     return 'No he recibido el email';
//   }
//
// }
//
//
//
// function validaPass($campo1, $campo2){
//
// if(isset($_POST[$campo1]) || isset($_POST[$campo2])){
//   $_POST[$campo1] = formateaCampo($campo1);
//   $_POST[$campo2] = formateaCampo($campo2);
//
//   if(strlen($_POST[$campo1]) < 8){
//     return 'La contraseña debe de tener al menos 8 caracteres';
//
//   }elseif(!preg_match_all("/(?=.*[A-Z])(?=.*\d)(?=.*[a-z])/", $_POST[$campo1])){
//       return 'El formato no es correcto, Debe tener 1 minúscula, 1 mayúscula y 1 número';
//       }elseif($_POST[$campo1] != $_POST[$campo2]){
//         return 'Las contraseñas no coinciden';
//         } else {
//           return null;
//           }
//     } else {
//           return 'No he recibido ambas claves';
//   }
//
// }
//
//
// function validaDni($campo){
//   if(strlen($_POST[$campo]) < 9 || strlen($_POST[$campo]) > 9){
//     return 'El DNI no es correcto';
//   }elseif(!preg_match_all("/^[\d]{8}[TRWAGMYFPDXBNJZSQVHLCKET]{1}/", $_POST[$campo])){
//     return 'EL formato del DNI no es correcto';
//   }elseif(compruebaDni($_POST[$campo])){
//     return 'El DNI no es correcto';
//   } else {
//     return null;
//   }
// }
//
//
//
//
// function compruebaDni($campo){
//   $letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X',
//     'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
//
//   $letra = substr($campo, -1);
//   $numeros =substr($campo, 0, -1);
//
//   $resto = $numeros%23;
//   $letraCalculada=$letras[$resto];
//
//   if($letra == $letraCalculada){
//     return false;
//   }else{
//     return true;
//   }
//
//   }
//
// function validaRol($campo){
//
//   if(isset($_POST[$campo])){
//     if($_POST[$campo] != 'alumno'){
//       if($_POST[$campo] != 'profesor'){
//         return 'El tipo de usuario no es correcto';
//       }
//     }else{
//       return null;
//     }
//
//   }else{
//     return 'No he recibido el tipo de usuario';
//   }
// }
//
//
// /*
// function comprobarEmail($campo, $archivo){
//   $array = file($archivo);
//
//   foreach ($array as $value) {
//     $datos = explode(' : ', $value);
//     if(isset($datos[3] )){
//       if($datos[3] == $_POST[$campo]){
//       return true;
//       }
//     }
//   }
//  return false;
// }*/
//
// function comprobarRepeticion($campo, $archivo){
//   $array = file($archivo);
//
//   foreach ($array as $value) {
//     $datos = explode(' : ', $value);
//     foreach ($datos as $value) {
//       if(isset($datos)){
//         if($value == $_POST[$campo]){
//         return true;
//         }
//       }
//     }
//
//   }
//  return false;
//
// }
//
//
// function comprobarPassword($campo1, $campo2, $archivo){
//   $array = file($archivo);
//   foreach ($array as $value) {
//     $datos = explode(' : ', $value);
//     if(isset($datos[3])){
//
//       if($datos[3] == $_POST[$campo1]){
//         if($datos[0] == $_POST[$campo2]){
//             return true;
//           }
//
//       }
//     }
//   }
//  return false;
// }
//
//
//
// function formateaCampo($campo){
// if ( isset($_POST[$campo])){
//   $_POST[$campo] = trim($_POST[$campo]);
//   $_POST[$campo] = strip_tags($_POST[$campo]);
//   $_POST[$campo] = preg_replace("/\"/",'', $_POST[$campo]);
//   return $_POST[$campo];
// }
//
// }

 ?>
