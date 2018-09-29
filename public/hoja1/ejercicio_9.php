<?php



$radianes = '5';
$grados = round(rad2deg($radianes), 2);


$arrayDecimales = preg_split("/[.]/", $grados);
$parteDecimal = (int)$arrayDecimales[1];

$minutos = ($parteDecimal * 60) /1000;

$arrayDecimales = preg_split("/[.]/", $minutos);
$parteDecimal = (int)$arrayDecimales[1];

$grados = ($parteDecimal * 60) / 1000;

echo "El valor de 5 readianes en grados es $grados, $minutos minutos y $grados segundos";

?>
<br>
<a href="../index.php">Regresar al menú</a>