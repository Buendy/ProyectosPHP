<?php include_once('./funciones.php');
      include_once('./models/Users.php');?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#" id="cabeceralateral">Form 1.0</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link botones" href="index.html">Inicio</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link botones" href="index.php">registrarse</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link botones " href="login.php">Iniciar sesión</a>
        </li>

      </ul>
    </div>
  </nav>

<div align="center">
  <?php

  if(!isset($_SESSION['rol']['roldeusuario']) || $_SESSION['rol']['roldeusuario'] != 'profesor')
  {
    volver();
  }else{


    echo '<pre>';
    $consulta = new Users();
    $query = $consulta->UserCurso($_POST['nombre']);
    $row = $query->fetch(PDO::FETCH_ASSOC);

    if($row != false){
      cursos($query);
      echo '<br><a  href="administracion.php" class="btn btn-success">Volver</a><br><br>';
    }else {
      echo '<p class="listaErrores">Este alumno no está matriculado en ningun curso</p>';
      echo '<a  href="administracion.php" class="btn btn-success">Volver</a><br><br>';
    }

  }

  ?>

</div>



<script src="./js/jquery-3.3.1.min.js"></script>
<script src="./js/popper.js"></script>
<script src="./js/bootstrap.min.js"></script>

   </body>
 </html>
