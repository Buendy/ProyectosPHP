<?php

$texto = "Esta es una cadena de texto donde se buscará otra cadena";
$subcadena = 'texto';

localizar($texto,$subcadena);

function localizar($texto, $subcadena){

  $repeticiones = substr_count($texto, $subcadena);
  echo 'La cadena ' .  $subcadena . ' se repite ' . $repeticiones . ' veces.';


}

 ?>
 <br>
 <a href="../index.php">Regresar al menú</a>
