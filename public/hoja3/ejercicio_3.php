<?php

$hora = $_POST['hora'];
$array = explode(':', $hora);
$hora1 = date_create("$array[0]:$array[1]:51");
$hora2 = date_create("13:02:05");

diferenciaSegundos($hora1, $hora2);


function diferenciaSegundos($hora1, $hora2){

  echo 'La hora introducida es ' . $hora1->format('H:i:s') . '<br>';
  echo 'La hora para calcular diferencia es ' . $hora2->format('H:i:s') . '<br>';
  $diferencia = date_diff($hora1, $hora2);
  echo 'La diferencia en segundos entre una hora y otra es ' . $diferencia->format("%s");

}

?>
 <br>
 <a href="../index.php">Regresar al menú</a>
