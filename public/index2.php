<b>Esto está fuera de php</b>
<?="<h1>Hola mundo!!</h1>"?>
<i>Por tanto será ignorado</i>

<?php
if(true){ //condicional simple
	echo "<br>Esta es la parte verdadera";
}
$numero = 150;
if($numero < 10){ //condicional compuesto
	echo "<br>Esta es la parte verdadera";
} else echo "<br>Esta es la parte falsa";
if($numero == 100){ //condicional multiple
	echo "<br>El numero es 100";
	} else if ($numero > 100) {
		echo "<br>El número es mayor que 100";
	}else {
		echo "<br>El número es menor que 100";
} 
if($numero == 100){ ?>
<br>El numero es 100
<?php } else if ($numero > 100) { ?>
<br>El número es mayor que 100
<?php }else {?>
<br>El número es menor que 100
<?php } ?>

<br>

<?php
$cadena ="Esto es una variable";
echo "$cadena<br>";
var_dump($cadena);