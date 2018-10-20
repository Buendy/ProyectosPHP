<?php

spl_autoload_register(function($clave){
  $archivo = $clave . '.php';
  include $archivo;
});

session_start();
session_destroy();

 ?>

<a href="ejemplo5.php">Volver</a>
