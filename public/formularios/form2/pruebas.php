<?php

include('./lib/Dbpdo.php');
$_POST['email']= 'buendy13@hotsadasdmail.com';
$conexion = new Dbpdo();
echo '<pre>';

$check = $conexion->checkEmail('users', 'email');


if($check = $conexion->checkEmail('users', 'email')){
var_dump($check);
}else{
  var_dump($check);
}

?>
