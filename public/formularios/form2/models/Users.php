<?php

include('./lib/Dbpdo.php');


class Users extends Dbpdo
{


  public function getUsers($table)
    {
      if(isset($table)){
      return $this->db->query("SELECT id, nick, nombre, apellidos, email, telefono, dni, rol FROM $table");
    }else{
      throw new Exception('A ocurrido un error con la base de datos');
    }

  }
  








}

 ?>
