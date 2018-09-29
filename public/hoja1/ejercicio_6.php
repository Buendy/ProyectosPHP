<?php

$C = 438.73;

$a = 500;
$b = 200;
$c = 100;
$d = 50;
$e = 20;
$f = 10;
$g = 5;

$h = 2;
$i = 1;
$j = 0.50;
$k = 0.20;
$l = 0.10;
$m = 0.05;
$n = 0.02;
$o = 0.01;

$CArray = preg_split("/[.]/", $C);
$parteDecimal = (int)$CArray[1];



echo 'Se muestra a continuación el dessglose de ' . $C . '<br>';
echo 'Hay ' . floor($C / $a) . ' billetes de ' . $a . '<br>';
$C = $C % $a;
echo 'Hay ' . floor($C / $b) . ' billetes de ' . $b . '<br>';
$C = $C % $b;
echo 'Hay ' . floor($C / $c) . ' billetes de ' . $c . '<br>';
$C = $C % $c;
echo 'Hay ' . floor($C / $d) . ' billetes de ' . $d . '<br>';
$C = $C % $d;
echo 'Hay ' . floor($C / $e) . ' billetes de ' . $e . '<br>';
$C = $C % $e;
echo 'Hay ' . floor($C / $f) . ' billetes de ' . $f . '<br>';
$C = $C % $f;
echo 'Hay ' . floor($C / $g) . ' billetes de ' . $g . '<br>';
$C = $C % $g;
echo 'Hay ' . floor($C / $h) . ' monedas de ' . $h . '<br>';
$C = $C % $h;
echo 'Hay ' . floor($C / $i) . ' monedas de ' . $i . '<br>';
$C = $C % $i;

echo 'Hay ' . floor($parteDecimal / ($j*100)) . ' monedas de ' . $j . '<br>';
$parteDecimal = $parteDecimal % ($j*100);
echo 'Hay ' . floor($parteDecimal / ($k*100)) . ' monedas de ' . $k . '<br>';
$parteDecimal = $parteDecimal % ($k*100);
echo 'Hay ' . floor($parteDecimal / ($l*100)) . ' monedas de ' . $l . '<br>';
$parteDecimal = $parteDecimal % ($l*100);
echo 'Hay ' . floor($parteDecimal / ($m*100)) . ' monedas de ' . $m . '<br>';
$parteDecimal = $parteDecimal % ($m*100);
echo 'Hay ' . ffloor($parteDecimal / ($n*100)) . ' monedas de ' . $n . '<br>';
$parteDecimal = $parteDecimal % ($n*100);
echo 'Hay ' . floor($parteDecimal / ($o*100)) . ' monedas de ' . $o . '<br>';
$parteDecimal = $parteDecimal % ($o*100);


?>
<br>
<a href="../index.php">Regresar al menú</a>