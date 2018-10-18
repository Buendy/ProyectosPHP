<?php
include('Etiqueta.php');
include('enlace.php');
include('migasPan.php');
include('MigasPanContenedor.php');

$migas = new migasPanContenedor('=>', "section");

$migas->agregaNodo("Home", "https://iescierva.net");
$migas->agregaNodo("Noticias", "https://iescierva.net/noticias");
$migas->agregaNodo("Noticias acdémicas", "https://iescierva.net/noticias/academicas");

echo $migas->mostrar();

 ?>
