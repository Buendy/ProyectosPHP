<?php


$a = 1;
$b = 5;
$c = 4;

$negativo = -1;

$resultado1 = (($b * $negativo)  + sqrt((pow($b,2) - 4 * $a * $c)))/(2*$a);
$resultado2 = (($b * $negativo)  - sqrt((pow($b,2) - 4 * $a * $c)))/(2*$a);

echo 'Un resultado es: ' . $resultado1;
echo '<br>';
echo 'Otro resultado es: ' . $resultado2;


?>


<br>
<a href="../index.php">Regresar al menú</a>