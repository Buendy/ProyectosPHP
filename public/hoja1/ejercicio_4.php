<?php

$m1 = 80;
$m2 = 50;
$r = 5;

$resultado = - 6.67 * pow(10, -11) * ($m1 * $m2) / pow($r, 2);
echo 'la fuerza de atracción gravitatoria de un objeto de ' . $m1 . 'kg y otro de ' . $m2 . 'Kg es de ' . $resultado . 'N';

?>
<br>
<a href="../index.php">Regresar al menú</a>