<?php

include_once('../lib/Dbpdo.php');


class Post extends Dbpdo
{

  public function getPosts($table)
  {
    if(isset($table)){
      return $this->db->query("SELECT id, titulo, cuerpo, fecha, idUsuario FROM $table");
    }else{
      throw new Exception('A ocurrido un error con la base de datos');
    }
  }

  public function getPost($table, $id)
  {
    if(!isset($table) || !isset($id)){
      throw new Exception('A ocurrido un error con la base de datos');
    }else{
      $prepare = $this->db->prepare("SELECT titulo, cuerpo, fecha FROM $table WHERE id = :id");
      $prepare->bindParam(':id', $id, PDO::PARAM_STR);
      $prepare->execute();
      return $prepare;
    }
  }

  public function getMyPosts($table, $id)
  {
    if(!isset($table) || !isset($id)){
      throw new Exception('A ocurrido un error con la base de datos');
    }else {
      $prepare = $this->db->prepare("SELECT * FROM $table WHERE idUsuario = :id");
      $prepare->bindParam(':id', $id, PDO::PARAM_STR);
      $prepare->execute();
      return $prepare;
    }
  }

  public function deletePost($table, $id)
  {
    if(isset($table) || isset($id)){
      $prepare = $this->db->prepare("DELETE FROM $table WHERE id = :id");
      $prepare->bindParam(':field', $id, PDO::PARAM_STR);

      $prepare->execute();
    }else{
      throw new Exception('A ocurrido un error con la base de datos, no se ha borrado el post');
    }

  }

}
 ?>
