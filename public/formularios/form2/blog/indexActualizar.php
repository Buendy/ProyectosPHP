<?php
if(!isset($errores)){
  $errores = [];
}
include_once('../models/Post.php');

if(!$_POST){
  header('Location:./misposts.php');
}else{
  include('./validaciones.php');

  if($errores){
    include('./formActualizar.php');
  }else{

    try{
      $update = new Post();
      $datos = ['id' => $_POST['id'], 'titulo' => $_POST['titulo'], 'cuerpo' => $_POST['cuerpo']];
      $update->updatePost('posts', $datos);
      echo 'Post Actualizado';
    }catch (Exception $e){
      echo '<h3>Ha ocurrido un error, no se ha actualizado el posto</h3>';

      if($update->modeDEV){
        echo $e->getMessage();
      }
    }

  }
}




 ?>
