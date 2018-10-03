<?php
$texto = '12Esto es un texto para hacer pruebas <br>""';
$caracter = ' ';

$numCaracteres = contarCaracteres($texto, $caracter);
$numLetras = contarLetras($texto);
$numLineas = contarLineas($texto);
$numDigitos = contarDigitos($texto);
$numOtros = contarOtros($texto);
 echo 'El texto es: ' . $texto . '<br>';
echo 'En la cadena hay ' . $numDigitos . ' dígitos<br>';
echo 'En la cadena hay ' . $numLineas . ' líneas<br>';
echo 'En la cadena hay ' . $numLetras . ' letras <br>';
echo 'En la cadena hay ' . $numCaracteres . ' carácteres en blanco<br>';
echo 'En la cadena hay ' . $numOtros . ' comillas';


function contarOtros($texto){
  $numOtros = preg_match_all('/"/', $texto);
  return $numOtros;
}

function contarDigitos($texto){
  $numDigitos = preg_match_all('/\d/', $texto);
  return $numDigitos;
}


function contarLineas($texto){
  $numLineas = substr_count($texto, "<br>");
  return $numLineas;
}

function contarLetras($texto){

  $numLetras = preg_match_all("/[a-zA-ZÀ-ÖØ-öø-ÿ]/", $texto);
  return $numLetras;
}

function contarCaracteres($texto, $caracter){

$numCaracteres = mb_substr_count($texto, $caracter);
return $numCaracteres;
}

 ?>

 <br>
 <a href="../index.php">Regresar al menú</a>
