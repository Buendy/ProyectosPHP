<?php
$texto = 'Dabale arroz a la zorra el abad';
comprobar($texto);



function comprobar($texto){

$texto = strtolower(str_replace(" ","", $texto));
$textoInvert = strrev($texto);

echo $texto . '<br>';
echo $textoInvert . '<br>';

if ($texto == $textoInvert) {
  echo 'si es un palíndromo';
} else {
  echo 'no es un palíndromo';
}
}

 ?>

 <br>
 <a href="../index.php">Regresar al menú</a>
