<?php session_start() ?>

<?php session_destroy() ?>
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
  </nav><br><br><br><br><br>
  <div class="row">
    <div class="col-md-5">

    </div>
    <div class="col-md-2 centrado" id="cuadrologin">
        <p>Acabas de salir de la sesión</p>
        <br>
        <a href="index.html">Regresar a la página principal</a>
      </div>
      <div class="col-md-5">

      </div>
    </div>

     <script src="./js/jquery-3.3.1.min.js"></script>
     <script src="./js/popper.js"></script>
     <script src="./js/bootstrap.min.js"></script>

  </body>
</html>
