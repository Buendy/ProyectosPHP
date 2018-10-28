<?php
include('lib/Dbpdo.php');

class Usuario extends DBpdo
{


  /*
  public function __construct()
  {
    echo 'Hola, soy un usuario';
  }*/

  public $table = 'usuarios';

  public function insert($params)
  {
    return parent::insert($this->validateParams($params));
  }

  private function validateParams($params)
  {
    // Se validan los parámetros
    return $params;
  }



}

?>
