

<?php

$N = 20;
$I = 30;
$J= 16;


ImprimirNumeros($N, $I, $J);



function ImprimirNumeros($N, $I, $J){
  for ($i=0; $i <= $N; $i++) {
    echo $i . '<br>';
  }

  $resultado = $I % $J;
  if (!$resultado){
    echo $I . ' es múltiplo de ' . $J;
  } else {
    echo $I . ' no múltiplo de ' . $J;

}
}


 ?>
 <br>
 <a href="../index.php">Regresar al menú</a>
