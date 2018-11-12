<?php

include_once('./lib/Dbpdo.php');


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


  public function updateUsers($table, $datos)
  {
    if(isset($table) || isset($datos)){
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

    }else {
      throw new Exception('A ocurrido un error con la base de datos');
    }


  }

  public function getRolImage($table, $field)
  {
    $prepare = $this->db->prepare("SELECT rol, archivo FROM $table WHERE email = :field");

    $prepare->bindParam(':field', $_POST[$field], PDO::PARAM_STR);

    $prepare->execute();

    return $prepare->fetchall(PDO::FETCH_ASSOC);
  }



    public function insertUser($table, $fields)
    {
      if(isset($table) || isset($fields)){
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
      }else{
        throw new Exception('Hay problemas con la BD');
      }



    }


    public function UserCurso($user)
    {
      if(isset($user)){
          $prepare = $this->db->prepare("SELECT cs.nombre, cs.descripcion FROM users u INNER JOIN study st ON u.id = st.idUser INNER JOIN cursos cs ON st.idCurso=cs.id WHERE u.nombre = :user");
          $prepare->bindParam(':user', $user, PDO::PARAM_STR);
          $prepare->execute();
          return $prepare;

      }else {
        throw new Exception('Hay problemas con la BD');
      }
    }









}

 ?>
