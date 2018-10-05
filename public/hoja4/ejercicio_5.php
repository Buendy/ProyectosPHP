<?php

$texto = "Esta cadena tiene el número 5 y el número 2, pero también tiene el número 3";
$subcadena = 'número';

localizar($texto, $subcadena);

function localizar($texto, $subcadena){

$posicion = strpos($texto, $subcadena);
$posicion += 7;
$num = substr($texto, $posicion, $posicion +=1 );
echo $posicion . '<br>';
echo $num. '<br>';

}

 ?>
 <br>
 <a href="../index.php">Regresar al menú</a>
