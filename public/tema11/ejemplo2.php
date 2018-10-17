<?php

include('enlace.php');
include('migasPan.php');

$migas = new migasPan();

$migas->agregaNodo("Home", "https://iescierva.net");
$migas->agregaNodo("Noticias", "https://iescierva.net/noticias");
$migas->agregaNodo("Noticias acdémicas", "https://iescierva.net/noticias/academicas");

echo $migas->mostrar();

 ?>
