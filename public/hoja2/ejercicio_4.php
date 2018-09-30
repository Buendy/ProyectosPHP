
<?php

$year = new DateTime('2016');
$year = $year->format('Y');


$initYear = new DateTime($year - 1  . '-12-31');
$endYear = new DateTime($year + 1 .'-1-1');
$interval = $initYear->diff($endYear);
echo $interval->format('%a días');

?>

<br>
<a href="../index.php">Regresar al menú</a>
