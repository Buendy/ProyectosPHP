<?php


$anyo = $_POST['anyo'];
$anyos = $_POST['anyos'];
$next = 2020;

echo 'En el ' . $next . ' tendrás ' . (($next - $anyo) + $anyos) . ' años';
?>
<br>
<a href="../index.php">Regresar al menú</a>