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


echo 'Se muestra a continuación el dessglose de 438€<br>';
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
echo 'Hay ' . floor($C / $j) . ' monedas de ' . $j . '<br>';
$C = $C % $j;
echo 'Hay ' . floor($C / $k) . ' monedas de ' . $k . '<br>';
$C = $C % $k;
echo 'Hay ' . floor($C / $l) . ' monedas de ' . $l . '<br>';
$C = $C % $l;
echo 'Hay ' . floor($C / $m) . ' monedas de ' . $m . '<br>';
$C = $C % $m;
echo 'Hay ' . floor($C / $n) . ' monedas de ' . $n . '<br>';
$C = $C % $n;
echo 'Hay ' . floor($C / $o) . ' monedas de ' . $o . '<br>';
$C = $C % $o;



?>


<br>
<a href="../index.php">Regresar al menú</a>