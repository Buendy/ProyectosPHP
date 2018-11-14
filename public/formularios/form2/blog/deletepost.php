
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BLOG</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/estilosblog.css">
  </head>
  <body>


<div class="header">
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
<?php
include_once('../models/Post.php');
$delete = new Post();
try{
$delete->delete('posts', 'id');
echo "<p class=\"centrado\">Post borrado</p><p class=\"centrado\"><a href=\"./misposts.php\" class=\"btn btn-warning\" >Volver a mis posts</a></p><br>";
}catch (Exception $e){
echo '<h3>Ha ocurrido un error, no se ha borrado el post</h3>';
if($delete->modeDEV){
  echo $e->getMessage();
}
}


 ?>


</span>
</div>
<div class="column side"></div>
</div>

<div class="footer">
<p>Creado por: <a href="mailto:danielbuendiasmr@gmail.com">Daniel buendia</a></p>
</div>



<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
