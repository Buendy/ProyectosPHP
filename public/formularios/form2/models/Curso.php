<?php

include_once('./lib/Dbpdo.php');

class Curso extends Dbpdo
{

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
