<?php
include_once('../models/Post.php');

$id = 5;
$consulta = new Post();
$query = $consulta->getPost('posts', $id);

while($row = $query->fetch(PDO::FETCH_ASSOC)){
  echo $row['titulo'];


};


 ?>
