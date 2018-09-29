<?php

$radio = 2.5;
//$pi = pi();
$longitud = 2 * pi() * $radio;
$area = pow(pi(),2) * $radio;

echo 'Dada una circuferencia de radio ' . $radio . ' cm<br>';
echo 'La longitud de la circunferencia es ' . round($longitud,4) . ' cm<br>';
echo 'El área de la circunferencia es ' . round($area, 4) . ' cm2<br>';
?>

<a href="../index.php">Regresar al menú</a>