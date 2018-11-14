<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BLOG</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/estilosblog.css">
  </head>
  <body>


<div class="header" >
  <h2>Blog by: Daniel Buendia</h2>
</div>
<div class="row">
  <div class="column side">
    <ul class="enlaces">
      <li><a href="./index.php" class="enlaceslateral">Inicio</a> </li>
      <li><a href="./misposts.php" class="enlaceslateral">Mis posts</a> </li>
      <li><a href="../index.html" class="enlaceslateral">Volver a cursos</a> </li>
    </ul>
  </div>
  <div class="column middle">
    <span>
<div class="generalpost" align="center" >


<div class="misposts" align="center" >


<?php
include_once('../models/Post.php');
include_once('../models/Users.php');

session_start();
if(!isset($_SESSION['rol']['roldeusuario'])){
  echo "<p class=\"listaErrores\">Estas accediendo a una zona privada, debes de iniciar sesión para ver la página</p>";
}elseif($_SESSION['rol']['roldeusuario'] == 'alumno' || $_SESSION['rol']['roldeusuario'] == 'profesor') {
  $consulta = new Post();


  $query = $consulta->getMyPosts('posts', $_SESSION['idUsuarioConSesionIniciada']);

  echo '<table>';

  echo '<tr>';
  echo '<th class="centrado">titulo</th>';

  echo '<th class="centrado">fecha</th>';
  echo '<th colspan="3" class="centrado">Acciones</th>';
  echo '</tr>';


  while($row =$query->fetch(PDO::FETCH_ASSOC)){

    echo "<form class=\"form\" action=\"vermipost.php\" method=\"post\">";
    $id = $row['id'];
    echo "<input type=\"hidden\" name=\"id\" value=\"$id\">";
    echo '<tr>';
    $autor = new Users();
    $_SESSION['usuarioQueEscribePost'] = $autor->getUser('users', $row['idUsuario']);
    $idUs = $_SESSION['usuarioQueEscribePost'];
    echo "<input type=\"hidden\" name=\"idusuario\" value=\"$idUs\">";

    echo "<td class=\"tdposts\">".$row['titulo'].'</td>';
    echo "<td class=\"tdposts\">".$row['fecha'].'</td>';

    echo "<td><input type=\"submit\" name=\"actualizar\" class=\"btn btn-success botonesform\" value=\"actualizar\"></td>";
    echo "<td><input type=\"submit\" name=\"borrar\" class=\"btn btn-info botonesform\" value=\"borrar\"></td>";
    echo "<td><input type=\"submit\" name=\"verPost\" class=\"btn btn-info botonesform\" value=\"Ver Post\"></td>";
    echo '</tr>';
    echo "</form>";


  }
}else{
  echo "<p class=\"listaErrores\">Estas accediendo a una zona privada, debes de iniciar sesión para ver la página</p>";

}

 ?>
</span>
 </div>
 </div>




<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
