<?php


include('./models/Users.php');
$nombre = 'jose';
echo '<pre>';
$consulta = new Users();
//print_r($consulta->getUsers('users'));
$table = $consulta->UserCurso($nombre);


echo $table;





?>
