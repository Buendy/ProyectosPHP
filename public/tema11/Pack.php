<?php


class Pack implements iEnCarrito
{
  use MasMenos;
  use EnlaceComprar;
  private $productosPack;
  //private $cantidad=1;

  public function __construct($arrayProductos)
  {
    $this->productosPack = $arrayProductos;
  }

  public function mostrar()
  {
    $salida = '<div class="pack">';
    foreach ($this->productosPack as $key => $value) {
      $salida .= $value->mostrar();
      $salida .= '<br />';
    }
    $salida .= '</div>';
    return $salida;
  }


  public function permiteUnidades()
  {
    return true;
  }



  public function precio()
  {
    $total = 0;

    foreach ($this->productosPack as $producto) {
      $total += $producto->precio();
    }
    return $total * $this->cantidad;
  }


  public function precioIVA()
  {
    $total = 0;

    foreach ($this->productosPack as $producto) {
      $total += $producto->precioIVA();
    }
    return $total * $this->cantidad;
  }


  /*public function masUnidad($unidades = 1)
  {
    $this->cantidad += $unidades;
  }

  public function menosUnidad()
  {
    if ($this->cantidad > 0){
      $this->cantidad--;
    }
  }*/
  public function detalles()
  {
    foreach ($this->productosPack as $producto) {
      echo '<i>' .  $producto . '</i>';
    }
  }

  public function __toString()
  {
    $salida = "<br>Pack: " . $this->precio() . " &euro;";
    $salida .= $this->enlaceComprar();

    return $salida;
  }




}


 ?>
