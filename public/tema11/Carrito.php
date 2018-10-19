<?php






class Carrito
{
  private $productos = [];

  public function meter(iEnCarrito $elemento)
  {
    $this->productos[]=$elemento;
  }

  public function mostrar()
  {
    $total = 0;
    $totalIVA = 0;

    echo '<div class="carrito">';

    foreach ($this->productos as $key => $producto) {

      echo '<article class="lineacarrito">';
      echo $producto->mostrar();


      $enlaceMasUnidad = "?accion=masUnidad&indice=$key";
      $enlaceMenosUnidad = "?accion=menosUnidad&indice$key";
      $enlaceEliminar = "?accion?eliminar&indice=$key";

      if($producto->permiteUnidades()){
        echo "<a href=\"$enlaceMenosUnidad\">-</a> / <a href=\"$enlaceMasUnidad\">+</a>";
      }
      echo "<a href=\"$enlaceEliminar\" class=\"enlaceeliminar\">Eliminar</a>";
      echo '</article>';

      $total += $producto->precio();
      $totalIVA += $producto->precioIVA();
    }

    echo '<div class="totalcarrito">Total: ' . $total . ' (' . $totalIVA . ' IVA Incluido)</div>';
    echo '</div>';

  }

  public function quitar($indice)
  {
    unset($this->productos[$indice]);
  }

  public function masUnidad($indice)
  {
    $this->productos[$indice]->masUnidad();
  }

  public function menosUnidad($indice)
  {
    $this->productos[$indice]->menosUnidad();
  }

}




 ?>
