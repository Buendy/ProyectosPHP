<?php
session_start();
$_POST['correo'] = 'hola';
$_SESSION['user']['name'] = $_POST['correo'];
echo '<a href="cursos.php">Cursos</a>';


?>
