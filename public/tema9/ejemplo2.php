<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Citas</title>
  </head>
  <body>

    <?php

    $archivo = 'citas.txt';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      if(isset($_POST['cita']) && $_POST['cita'] != '' && isset($_POST['nombre']) && ! empty($_POST['nombre'])) {
        $fuente = fopen($archivo, "a+");

        if(is_writable($archivo)) {
            $reserva = $_POST['cita'] . ' : ' . $_POST['nombre'] . "\n";
            fwrite($fuente, $reserva);
            fclose($fuente);
            echo '<h2>Cita guardada</h2>';
            echo '<a href="ejemplo2.php">Regresar al formulario</a><br>';
            echo '<a href="../index.php">Regresar al índice</a><br>';
        }

      } else {
        echo '<h4>los datos introducidos no son correctos</h4><br>';
      }

    } else {
      include('formulario_citas.php');
    }

     ?>

  </body>
</html>
