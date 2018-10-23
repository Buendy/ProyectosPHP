<?php
spl_autoload_register(function($clave){
  $archivo = $clave . '.php';
  include $archivo;
});

session_start();

//$carrito = Carrito::getCarrito();

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Carrito de la compra</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>

    <?php
    $p1 = new Producto("Espuma de afeitar", 3.5);
    $p2 = new Producto("Cereales de chocolate", 5.99);
    $p3 = new Producto("Servilletas 20x20", 1.2);

    $carrito = Carrito::getCarrito();
    /*$carrito->meter($p1);
    $carrito->meter($p2);
    $carrito->meter($p3);
    $carrito->quitar(1);

    $carrito->masUnidad(0);
    $carrito->masUnidad(0);
    $carrito->menosUnidad(2);
    $carrito->menosUnidad(2);*/

    $d1 = new Descuento("Código XDD12233", 2);

    //$carrito->meter($d1);

    $p4 = new Producto("Cámara Canon x2", 96);
    $p5 = new Producto("Terjeta de memoria 8GB", 12);
    $p6 = new Producto("Mini Trípode", 5);

    $pack1 = new Pack([$p4, $p5, $p6]);
  //  $carrito->meter($pack1);


    $carrito->mostrar();
    echo "<br><br>";
    echo $p1;
    echo $p2;
    echo $p3;
    echo $d1;
    echo $pack1;

    $pack1->detalles();


     ?>
     <br><br>
     <p>
       <a href="destroy.php">Eliminar sesión</a>
     </p>

  </body>
</html>
