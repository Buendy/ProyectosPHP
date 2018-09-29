<?php



$radianes = '5';
$grados = round(rad2deg($radianes), 2);
$minutos = explode('.', $radianes);

echo $grados . '<br>';
echo ($minutos[1]) . '<br>';


?>