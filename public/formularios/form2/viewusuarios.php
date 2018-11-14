<?php include_once('./funciones.php')?>
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
    session_start();

    if(!isset($_SESSION['rol']['roldeusuario']) || $_SESSION['rol']['roldeusuario'] != 'profesor' ){

      volver();

    }else{
    //include('./lib/Dbpdo.php');
    include('./models/Users.php');
    $errores = [];

    echo '<p class="centrado">';
    echo 'Bienvenido profesor: ' . $_SESSION['user']['name'] . '<br><br>';
    echo '<a href="./indexCreate.php" class="btn btn-success">Crear usuario</a>';
    echo '<br><br>';

    //$consulta = new Dbpdo();
    $consulta = new Users();

    try{
    $query = $consulta->getUsers('users');


    echo '<table>';

    echo '<tr>';
    echo '<th class="centrado">Nick</th>';
    echo '<th class="centrado">Nombre</th>';
    echo '<th class="centrado">Apellidos</th>';
    echo '<th class="centrado">Email</th>';
    echo '<th class="centrado">Telefono</th>';
    echo '<th class="centrado">DNI</th>';
    echo '<th class="centrado">Rol</th>';
    echo '<th colspan="3" class="centrado">Acciones</th>';
    echo '</tr>';


    while($row = $query->fetch(PDO::FETCH_ASSOC)){

      echo "<form class=\"form\" action=\"indexUpdate.php\" method=\"post\">";
      echo '<tr>';

      $id = $row['id'];
      echo "<input type=\"hidden\" name=\"id\" value=\"$id\">";


      echo '<td>'.$row['nick'].'</td>';
      $nick = $row['nick'];
      echo "<input type=\"hidden\" name=\"nick\" value=\"$nick\">";

      echo '<td>'.$row['nombre'].'</td>';
      $nombre = $row['nombre'];
      echo "<input type=\"hidden\" name=\"nombre\" value=\"$nombre\">";

      echo '<td>'.$row['apellidos'].'</td>';
      $apellidos = $row['apellidos'];
      echo "<input type=\"hidden\" name=\"apellidos\" value=\"$apellidos\">";

      echo '<td>'.$row['email'].'</td>';
      $email = $row['email'];
      echo "<input type=\"hidden\" name=\"email\" value=\"$email\">";

      echo '<td>'.$row['telefono'].'</td>';
      $telefono = $row['telefono'];
      echo "<input type=\"hidden\" name=\"telefono\" value=\"$telefono\" >";

      echo '<td>'.$row['dni'].'</td>';
      $dni = $row['dni'];
      echo "<input type=\"hidden\" name=\"dni\" value=\"$dni\">";

      echo '<td>'.$row['rol'].'</td>';
      $rol = $row['rol'];
      echo "<input type=\"hidden\" name=\"rol\" value=\"$rol\">";

      echo "<td><input type=\"submit\" name=\"actualizar\" class=\"btn btn-success botonesform\" value=\"actualizar\"></td>";
      echo "<td><input type=\"submit\" name=\"borrar\" class=\"btn btn-info botonesform\" value=\"borrar\"></td>";
      echo "<td><input type=\"submit\" name=\"verCursos\" class=\"btn btn-info botonesform\" value=\"Ver cursos\"></td>";
      echo '</tr>';
      echo "</form>";


    }

      echo '</table>';
      echo '<p class="centrado">';
      echo '<a  href="index.html" class="btn btn-success">Volver a la página principal</a><br><br>';
      echo '<a  href="logout.php" class="btn btn-success">Cerrar sesión</a><br>';
      echo '</p>';
    }catch (Exception $e){
      echo '<h3>Ha ocurrido un error en la conexión a la BD</h3>';
      if($consulta->modeDEV){
        echo $e->getMessage();
      }
     }

    }


     ?>

     </div>
