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


    <?php

    $errores = [];
    $dataArray = [];
    session_start();

    if(isset($_POST['borrar'])){
        $delete = new Dbpdo();
        try{
        $delete->delete('users', 'id');
        echo '<p class="centrado">Usuario borrado</p><a class="centrado" href="./administracion.php">Volver a la página principal</a><br>';
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


      header("Location:administracion.php");


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
        echo '<a class="centrado"href="public.php">Volver a la página principal</a><br>';

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


</footer>
     <script src="./js/jquery-3.3.1.min.js"></script>
     <script src="./js/popper.js"></script>
     <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
