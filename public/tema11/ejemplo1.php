<?php

class Freelance
{
  private $nombre;
  protected $ocupado;
  private $precioHora = 10;
  private $comienzoTrabajo;
  public static $juegoCaracteres = 'UTF-8';


  public function __construct($nombre, $precioHora)
  {
    $this->nombre = $nombre;
    $this->precioHora = $precioHora;
    $this->ocupado = false;
  }

  public function desarrollar()
  {
    echo "<br>Soy " . $this->nombre . " y comienzo a trabajar";
    echo "Uso los caracteres " . self::$juegoCaracteres;
    $this->ocupado = true;
    $this->comienzoTrabajo = time();
  }

  public function parar()
  {
    $this->ocupado = false;
    $horasTrabajadas = ceil((time() - $this->comienzoTrabajo) / 3600);
    echo "Terminé de trabajar. facturo " . $horasTrabajadas * $this->$precioHora;
  }

  public function __destruct
  {
    echo "Soy " . $this->nombre;
    echo "<br>Y dejo de trabajar. Adios!!!";
  }

  public static function diasTrabajo()
  {
    if($invierno) {
      return ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado']:
    }
    return ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'];
  }

}



 ?>
