<?php include('funciones.php');
      include_once('./models/Users.php')?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilos.css">
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

      <div class="row nav">
        <div class="col-md-1" id="lateral">
          <a class="nav-link botoneslateral" href="cursos.php">Cursos</a>

              <?php
              session_start();
              if(isset($_SESSION['rol']['roldeusuario']) && $_SESSION['rol']['roldeusuario'] == 'profesor'){

                echo '<a href="administracion.php" class="nav-link botoneslateral">Administración</a> <br>';

              }

              ?>


        </div>


        <div class="col-md-11">

    <?php

    $errores = [];
    $dataArray = [];
    
    if(!isset($_SESSION['rol']['roldeusuario'])){

      volver();

    }elseif($_SESSION['rol']['roldeusuario'] != 'profesor'){

      volver();

    }else{

    if (!$_POST) {


      include('form.php');


    } else {

      include('validaciones.php');


      if($errores) {
        include('form.php');
      } else {
        $insertar = new Users();
        $dataArray = ['pass'=> md5($_POST['clave1']), 'nombre' => $_POST['nombre'], 'apellidos' => $_POST['apellidos'],
                      'email' => $_POST['email'], 'telefono' => $_POST['telefono'], 'rol' => $_POST['rol'], 'nick' => $_POST['nick'],
                      'dni' => $_POST['dni'], 'archivo' => $carpeta . $_POST['email'] . '.jpg'];

        try{

          $insertar->insertUser('users', $dataArray);
          $destino = $carpeta . $_POST['email'] . '.jpg';
          if(!move_uploaded_file($_FILES['archivo']['tmp_name'], $destino)) {
            echo 'Fallo al cargar el archivo';

          }

          echo '<p class="centrado">Correcto, usuario creado<br>';
          echo '<a class="centrado"href="public.php">Volver a la página principal</a></p><br>';

        }catch (Exception $e){
          echo '<h3>Ha ocurrido un error en la conexión a la BD</h3>';
          if($insertar->modeDEV){
            echo $e->getMessage();
          }
         }





      }

    }

  }


     ?>
   </div>
   </div>



 <footer class="pie">
  <p class="centrado">Creado por:
   <a href="mailto:danielbuendiasmr@gmail.com" id="btnfooter">Daniel buendia</a>.</p>
 </footer>



    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>

 </body>
 </html>
