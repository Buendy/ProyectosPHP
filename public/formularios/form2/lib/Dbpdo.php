<?php

class Dbpdo
{
  private $host = 'mysql';
  private $user = 'default';
  private $pass = 'secret';
  private $dbname = 'dbejemplopdo';


  public $errors  = false;

  public $db;

  public $modeDEV = false;

  private $persistent = true;



  public function __construct()
  {
    $this->db = $this->connection();
  }


  private function connection()
  {

    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
    $options = [PDO::ATTR_PERSISTENT => $this->persistent, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    try {
      return new PDO($dsn, $this->user, $this->pass, $options);
    }catch (PDOException $e){
      $this->errors = $e->getMessage();
      if($this->modeDEV){
        print_r($this->errors);
      }else{
        echo 'Hay problemas con el acceo a la BD. Prueba más tarde.';
      }
    }
  }

  public function getConnection()
  {
    return $this->db;
    $this->connection();
  }


  public function all($table, $limit = 10)
  {
    $prepare = $this->db->prepare('SELECT * FROM ' . $table);
    $prepare->execute();

    return $prepare->fetchall(PDO::FETCH_ASSOC);

  }

  public function checkRepeat($table, $campo)
  {

    $prepare = $this->db->prepare("SELECT $campo FROM $table WHERE $campo = :field");
    $prepare->bindParam(':field', $_POST[$campo], PDO::PARAM_STR);

    $prepare->execute();

    $check = $prepare->fetchall(PDO::FETCH_ASSOC);

    if($check){
      return true;
    } else{
      return false;
    }

  }

  public function checkRepeatPass($table, $campo1, $campo2)
  {

    $prepare = $this->db->prepare("SELECT $campo1 FROM $table WHERE $campo1 = :field AND $campo2 = :field2 ");
    $prepare->bindParam(':field', $_POST[$campo1], PDO::PARAM_STR);
    $prepare->bindParam(':field2', $_POST[$campo2], PDO::PARAM_STR);

    $prepare->execute();

    $check = $prepare->fetchall(PDO::FETCH_ASSOC);

    if($check){
      return true;
    } else{
      return false;
    }

  }





  public function insertUser($table, $fields)
  {
    $prepare = $this->db->prepare("INSERT INTO $table(nick, nombre, apellidos, email, telefono, pass, dni, rol, archivo)
                                   VALUES(:nick, :nombre, :apellidos, :email, :telefono, :pass, :dni, :rol, :archivo)");

    $prepare->bindParam(':nick', $fields['nick'], PDO::PARAM_STR);
    $prepare->bindParam(':nombre', $fields['nombre'], PDO::PARAM_STR);
    $prepare->bindParam(':apellidos', $fields['apellidos'], PDO::PARAM_STR);
    $prepare->bindParam(':email', $fields['email'], PDO::PARAM_STR);
    $prepare->bindParam(':telefono', $fields['telefono'], PDO::PARAM_STR);
    $prepare->bindParam(':pass', $fields['pass'], PDO::PARAM_STR);
    $prepare->bindParam(':dni', $fields['dni'], PDO::PARAM_STR);
    $prepare->bindParam(':rol', $fields['rol'], PDO::PARAM_STR);
    $prepare->bindParam(':archivo', $fields['archivo'], PDO::PARAM_STR);

    $prepare->execute();

  }


  public function getRolImage($table, $field)
  {
    $prepare = $this->db->prepare("SELECT rol, archivo FROM $table WHERE email = :field");

    $prepare->bindParam(':field', $_POST[$field], PDO::PARAM_STR);

    $prepare->execute();

    return $prepare->fetchall(PDO::FETCH_ASSOC);
  }



  public function getUsers($table)
  {
    if(isset($table)){
    return $this->db->query("SELECT id, nick, nombre, apellidos, email, telefono, dni, rol FROM $table");
  }else{
    throw new Exception('A ocurrido un error con la base de datos');
  }



  }


  public function checkRepeatUpdate($table, $campo)
  {


    $prepare = $this->db->prepare("SELECT * FROM $table WHERE $campo = :field");
    $prepare->bindParam(':field', $_POST[$campo], PDO::PARAM_STR);


    $prepare->execute();

    $check = $prepare->fetch(PDO::FETCH_ASSOC);

    $id = $check['id'];



    if ($prepare->rowCount()){
     if($id == $_POST['id']){
        return true;
     } else {
       return false;
     }
     }else {
       return true;
     }

   }





  public function updateUsers($table, $datos)
  {

    $prepare = $this->db->prepare("UPDATE $table SET nick=:nick, nombre=:nombre, apellidos=:apellidos, email=:email,
                                                      telefono=:telefono, dni=:dni, rol=:rol WHERE id = :id");


      $prepare->bindParam(':nick', $datos['nick'], PDO::PARAM_STR);
      $prepare->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
      $prepare->bindParam(':apellidos', $datos['apellidos'], PDO::PARAM_STR);
      $prepare->bindParam(':email', $datos['email'], PDO::PARAM_STR);
      $prepare->bindParam(':telefono', $datos['telefono'], PDO::PARAM_STR);
      $prepare->bindParam(':dni', $datos['dni'], PDO::PARAM_STR);
      $prepare->bindParam(':rol', $datos['rol'], PDO::PARAM_STR);
      $prepare->bindParam(':id', $datos['id'], PDO::PARAM_STR);

      $prepare->execute();


  }


  public function deleteUsers($table, $campo)
  {
    $prepare = $this->db->prepare("DELETE FROM $table WHERE $campo = :field");
    $prepare->bindParam(':field', $_POST[$campo], PDO::PARAM_STR);

    $prepare->execute();

  }












}


 ?>
