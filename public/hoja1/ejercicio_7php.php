<?php
;
$numero = $_POST['numero'];


for ($i=1; $i <= 10 ; $i++) { 
	
	echo $numero . 'x' . $i . '= ' . ($numero*$i) . '<br>';
}


?>

<br>
<a href="../index.php">Regresar al menú</a>