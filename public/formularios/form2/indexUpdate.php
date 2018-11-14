<?php include_once('funciones.php');
      include_once('./lib/Dbpdo.php');
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


    if(isset($_POST['borrar'])){
        $delete = new Dbpdo();
        try{
        $delete->delete('users', 'id');
        echo '<p class="centrado">Usuario borrado</p><p class="centrado"><a href="./viewusuarios.php">Volver a la página principal</a></p><br>';
      }catch (Exception $e){
        echo '<h3>Ha ocurrido un error, no se ha borrado el usuario</h3>';
        if($delete->modeDEV){
          echo $e->getMessage();
        }
       }
    }elseif(isset($_POST['verCursos'])){
      include('vistaCursos.php');
    }else{



    if (!$_POST) {


      header("Location:viewusuarios.php");


    } else {
      if(!isset($_POST['submit'])){
        include('formUpdate.php');
      }else{
        include('validacionesUpdate.php');





      if($errores) {
        include('formUpdate.php');
      } else {
        try{
        $update = new Users();
        $dataArray = ['nick' => $_POST['nick'], 'nombre' => $_POST['nombre'], 'apellidos' => $_POST['apellidos'], 'email' => $_POST['email'],
         'telefono' => $_POST['telefono'], 'dni' => $_POST['dni'], 'rol' => $_POST['rol'], 'id' => $_POST['id']];



        $update->updateUsers('users', $dataArray);

        echo '<p class="centrado">Correcto, usuario actualizado</p><br>';
        echo '<a class="centrado"href="viewusuarios.php">Volver a la página principal</a><br>';

      }catch (Exception $e){
        echo '<h3>Ha ocurrido un error, no se ha actualizado el usuario</h3>';

        if($update->modeDEV){
          echo $e->getMessage();
        }
       }

        }

      }

    }
        }

     ?>

   </div>
   </div>






    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>

 </body>
 </html>
