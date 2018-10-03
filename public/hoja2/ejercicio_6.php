<?php

for ($i=1, $y=10; $i <= 100 ; $i++) { 
	echo $i . ' ';
	if($i == $y){
		echo '<br>';
		$y += 10;
	}
}

?>

<br>
<a href="../index.php">Regresar al menú</a>