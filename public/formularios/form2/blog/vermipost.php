<?php


if(isset($_POST['actualizar'])){
  include_once('../funciones.php');
  include('./formActualizar.php');
}elseif(isset($_POST['borrar'])){

  include('./deletepost.php');

}elseif(isset($_POST['verPost'])){

  include("./verpost.php");

}else{
  header('Location:./misposts.php');
}

 ?>
