<?php

$fuente = fopen("lista.txt", "a+");

fwrite($fuente, "Hola Mundo\n");
fwrite($fuente, "Ahí estamo\n");
fclose($fuente);

?>
