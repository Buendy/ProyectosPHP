<?php


class Validacion
{

  private $tam_max = 2 * 1024 * 1024; //declaramos como tam maximo 2 MB
  private $carpeta = "./uploads/";



  public function validaNick($campo){
    if(isset($_POST[$campo])){

      if(strlen($_POST[$campo]) > 10 || strlen($_POST[$campo]) < 4  ){
        return 'El nick debe tener entre 4 y 10 caracteres';
      }elseif(preg_match("/[^a-zA-Z'áéíóúàèìòùäëïöüÁÉÍÓÚÀÈÌÒÙÄËÏÖÜ_\d]/", $_POST[$campo])){
        return 'El nick solo puede contener letras, -_\' y algún número';
      }else {
        return null;
      }

    }else {
      return 'No he recibido el nick';
    }
  }



  public function validaNombre($campo){

    if ( isset($_POST[$campo])){

      if(strlen($_POST[$campo]) < 4){
        return 'El nombre es demasiado corto<br>';
      }elseif(preg_match("/[^a-zA-Z' áéíóúàèìòùäëïöüÁÉÍÓÚÀÈÌÒÙÄËÏÖÜ]/", $_POST[$campo])){
        return 'El nombre no puede contener números o caracteres especiales';
      }else {
        return null;
      }
    } else {
      return 'No he recibido el nombre';
    }
  }



  public function validaApellidos($campo){

    if(isset($_POST[$campo])){

      if(strlen($_POST[$campo]) < 4){
        return 'El apellido es demasiado corto<br>';
      } elseif(preg_match("/[^a-zA-Z'á éíóúàèìòùäëïöüÁÉÍÓÚÀÈÌÒÙÄËÏÖÜ]/", $_POST[$campo])){
        return 'El apellido no puede contener números o caracteres especiales';
      }else {
        return null;
      }

    } else {
      return 'No he recibido el apellido';
    }

  }


  public function validaTelefono($campo){

    if(isset($_POST[$campo])){

      if(strlen($_POST[$campo]) < 9 || strlen($_POST[$campo]) > 9  ){
        return 'El número de teléfono introducido no es correcto';
      }elseif(!preg_match('/^[8|9|6|7][\d]{8}$/', $_POST[$campo])){
        return 'El número introducido no es correcto';
      } else {
        return null;
      }
    } else {
      return 'No he recibido el teléfono';
    }

  }


  public function validaEmail($campo){ //Se valida el email para que tenga el formato correcto

    if (isset($_POST[$campo])){

      if(strlen($_POST[$campo]) < 6){
        return 'El email es demasiado corto';
      }elseif(!preg_match_all('/^[a-zA-Z\d-_*\.]+@[a-zA-Z\d-_*\.]+\.[a-zA-Z\d]{2,}$/', $_POST[$campo])){
        return 'El email no es correcto';
      }else {
        return null;
      }
    } else {
      return 'No he recibido el email';
    }

  }


  public function validaPass($campo1, $campo2){

  if(isset($_POST[$campo1]) || isset($_POST[$campo2])){

    if(strlen($_POST[$campo1]) < 8){
      return 'La contraseña debe de tener al menos 8 caracteres';

    }elseif(!preg_match_all("/(?=.*[A-Z])(?=.*\d)(?=.*[a-z])/", $_POST[$campo1])){
        return 'El formato no es correcto, Debe tener 1 minúscula, 1 mayúscula y 1 número';
        }elseif($_POST[$campo1] != $_POST[$campo2]){
          return 'Las contraseñas no coinciden';
          } else {
            return null;
            }
      } else {
            return 'No he recibido ambas claves';
    }

  }


  public function validaDni($campo){
    if(strlen($_POST[$campo]) < 9 || strlen($_POST[$campo]) > 9){
      return 'El DNI no es correcto';
    }elseif(!preg_match_all("/^[\d]{8}[TRWAGMYFPDXBNJZSQVHLCKET]{1}/", $_POST[$campo])){
      return 'EL formato del DNI no es correcto';
    }elseif($this->compruebaDni($_POST[$campo])){
      return 'El DNI no es correcto';
    } else {
      return null;
    }
  }



  private function compruebaDni($campo){
    $letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X',
      'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

      $letra = substr($campo, -1);
      $numeros =substr($campo, 0, -1);

      $resto = $numeros%23;
      $letraCalculada=$letras[$resto];

      if($letra == $letraCalculada){
        return false;
      }else{
        return true;
      }

    }


    public function validaRol($campo){

      if(isset($_POST[$campo])){
        if($_POST[$campo] != 'alumno'){
          if($_POST[$campo] != 'profesor'){
            return 'El tipo de usuario no es correcto';
          }
        }else{
          return null;
        }

      }else{
        return 'No he recibido el tipo de usuario';
      }
    }



    // public function comprobarRepeticion($campo, $archivo){
    //   $array = file($archivo);
    //
    //   foreach ($array as $value) {
    //     $datos = explode(' : ', $value);
    //     foreach ($datos as $value) {
    //       if(isset($datos)){
    //         if($value == $_POST[$campo]){
    //         return true;
    //         }
    //       }
    //     }
    //
    //   }
    //  return false;
    //
    // }
    //
    //
    // public function comprobarPassword($campo1, $campo2, $archivo){
    //   $array = file($archivo);
    //   foreach ($array as $value) {
    //     $datos = explode(' : ', $value);
    //     if(isset($datos[3])){
    //
    //       if($datos[3] == $_POST[$campo1]){
    //         if($datos[0] == $_POST[$campo2]){
    //             return true;
    //           }
    //
    //       }
    //     }
    //   }
    //  return false;
    // }


    public function validaArchivo($campo){
      if(isset($_FILES[$campo])){

      if($_FILES['archivo']['size'] == 0) {
        return 'El archivo no ha llegado correctamente';
      }elseif($_FILES['archivo']['size'] > $this->tam_max){
        return "El archivo no puede superar $this->tam_max bytes";
      }elseif($_FILES['archivo']['type'] != 'image/jpeg') {
        return 'No se permiten archivos diferentes de jpg';
      }
    }else {
      return 'No he recibido el archivo';
    }

  }

  public function validaTitulo($campo){
    if(isset($_POST[$campo])){

      if(strlen($_POST[$campo]) >= 100){
        return 'El titulo es demasiado largo';
      }
    }else{
      return 'No he recibido el titulo';
    }
  }

  public function validaCuerpo($campo){
    if(isset($_POST[$campo])){

      if(strlen($_POST[$campo]) >= 2000){
        return 'El cuerpo es demasiado largo';
      }
    }else{
      return 'No he recibido el cuerpo';
    }
  }



  public static function formateaDatos($campo){

      if ( isset($_POST[$campo])){
        $_POST[$campo] = trim($_POST[$campo]);
        $_POST[$campo] = strip_tags($_POST[$campo]);
        $_POST[$campo] = preg_replace("/\"/",'', $_POST[$campo]);
        return $_POST[$campo];
      }

  }



}



 ?>
