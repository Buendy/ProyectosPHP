<?php

include('Plantilla.php');
include('PlantillaHtml.php');


$html = '<!DOCTYPE html>
<html lang="es"
<head>
  <meta charset="UTF-8">
  <title> PAGINA CON PLANTILLA </title>
</head>
<body>
  <b>Hola %nombre%</b>
  <p>Estoy muy %animo%</p>
  <p>Vivo en %ciudad%</p>
</body>
</html>';


$diccionario = ["nombre" => "Pepe", "animo" => "cachondo", "ciudad" => "Murcia"];

$plantilla = new PlantillaHtml($html);
$plantilla->renderData($diccionario);



 ?>
