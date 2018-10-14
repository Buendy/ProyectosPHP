<?php
$_POST['email'] = 'smrr@gmail.com';
$archivo = 'usuarios.txt';


$comprobar = comprobarEmail('email', $archivo);


function comprobarContraseña($campo, $archivo){
  $array = file($archivo);

  foreach ($array as $value) {
    $datos = explode(' : ', $value);
    echo $datos[5] . '<br>';
    if($datos[5] == $_POST[$campo]){
      return true;
    }
  }
 return false;
}



?>
