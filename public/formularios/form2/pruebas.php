<?php

include_once('./models/Post.php');


$consulta = new Post();
$query = $consulta->getPosts('users');
var_dump($query);



?>
