<?php


if(isset($_POST['actualizar'])){
  echo "ACTUALIZAR";
}elseif(isset($_POST['borrar'])){

  include('./deletepost.php');

}elseif(isset($_POST['verPost'])){

  include("./verpost.php");

}else{
  header('Location:./misposts.php');
}

 ?>
