<?php


for ($i=2; $i <= 100 ; $i++) { 
    $contador = 0;
    for ($y=2; $y <= $i; $y++) { 
        if ( ($i % $y) == 0){
            $contador++;
        }
    }
        if ($contador < 2) {
            echo 'El número ' . $i . ' si es primo<br>';
        }else{
            echo 'El número ' . $i . ' no es primo<br>';
        }
}
?>
<br>
<a href="../index.php">Regresar al menú</a>