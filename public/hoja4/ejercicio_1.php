<?php

$texto = "ZUN TEXTO, y algo MAS";
$num = 1;
$solucion = codificar($texto, $num);

function codificar($texto, $num){

$colucion = '';

for ($i=0; $i <strlen($texto) ; $i++) {


  $letra = $texto[$i];

  if($letra != strtoupper($letra)){
    echo $solucion[$i];
      continue;
  }
  $letraNumerica = ord($letra) + $num;

  if($letraNumerica > 90){
    $letraNumerica = $letraNumerica - 26;
  }elseif($letraNumerica < 65){
    $letraNumerica = $letraNumerica + 26;
  }
$solucion[$i] = chr($letraNumerica);

if($letraNumerica == 59){
  $solucion[$i] = chr(32);
}
if($letraNumerica == 96){
  $solucion[$i] = chr(44);
}

echo $solucion[$i];


}


}

 ?>
 <br>
 <a href="../index.php">Regresar al menú</a>
