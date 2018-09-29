<?php

$fechaActual = time();
$fechaNacimiento =  '1989-12-08';

$edad = strtotime($fechaNacimiento);
$edad = ($fechaActual-$edad)/(60*60*24*365.25);
$edad = floor($edad);
echo 'La fecha de nacimiento es ' . $fechaNacimiento . '<br>';
echo 'la edad a partir de la fecha de nacimiento es ' . $edad;



?>

<br>
<a href="../index.php">Regresar al menú</a>	