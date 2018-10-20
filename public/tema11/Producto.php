<?php

class Producto implements iEnCarrito
{
  private $nombre;
  private $precio;
  private $iva;
  private $cantidad = 1;


  public function mostrar()
  {
    return "<p><span>({$this->cantidad}x)</span> {$this->nombre}: {$this->precio} &euro; + {$this->iva}% </p>";
  }


  public function precio()
  {
    return $this->precio * $this->cantidad;
  }


  public function precioIVA()
  {
    return round($this->precio * $this->cantidad * (1 + $this->iva/100),2);
  }


  public function __construct($nombre, $precio, $iva = 21)
  {
    $this->nombre=$nombre;
    $this->precio=$precio;
    $this->iva=$iva;
  }


  public function masUnidad($unidades = 1)
  {
    $this->cantidad += $unidades;
  }


  public function menosUnidad()
  {
    if($this->cantidad > 0){
      $this->cantidad--;
    }
  }


  public function permiteUnidades()
  {
    return true;
  }

  public function __toString()
  {
    $salida = "<br>" . $this->nombre . " " . $this->precio . " &euro;";
    $salida .= "<a href=\"?accion=comprar&producto=" . urlencode(serialize($this)) ."\">Comprar</a>";
    return $salida;
  }

}

 ?>
