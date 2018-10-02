<?php


function desencriptar($cadena, $clave){

  $solucion = '';
  for ($i=0; $i < strlen($cadena); $i++) {
    $letra = $cadena[i];
    $letraNumerica = ord($letra);

    $newLetraNumerica = $letraNumerica + $clave

    if ($newLetraNumerica > 90 ){
      $newLetraNumerica = -=26;
    }elseif ($newLetraNumerica < 65){
      $newLetraNumerica = +=26;
    }
    $solucion[i] = chr($newLetraNumerica);

  }
}

$cadenaEncriptada = 'LEGREXIRDRVJLEKVOKFHLVTFEKZVEVKFURJCRJCVKIRJUVCRSVTVURIZFL';

$cadena = $cadenaEncriptada;

$clave = 0;

while (strpos($cadena, 'FELIX' )){

}


 ?>
