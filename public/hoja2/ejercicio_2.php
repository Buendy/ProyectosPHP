<?php


$a = 3;
$b = -1;
$c = 8;
$d = 3;
$e = 6;
$f = 5;

$x = ($c*$e)/($a*$e-$b*$d);
$y = ($a*$f-$c*$d)/($a*$e-$b*$d);

if (($a*$x+$b*$y) == $c){
    echo 'El resultado es: ' . $c;
}else{
    echo 'No hay solución con la primera fórmula';
}

echo "<br>";

if (($d*$x+$e*$y) == $f){
    echo 'El resultado es: ' . $f;
}else{
    echo 'No hay solución con la segunda fórmula';
}


?>
<br>
<a href="../index.php">Regresar al menú</a>