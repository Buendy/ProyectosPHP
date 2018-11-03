<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

<div align="center">

    <?php
    include('./lib/Dbpdo.php');
    $errores = [];

    $consulta = new Dbpdo();

    $query = $consulta->getUsers('users');

    echo '<table>';

    echo '<tr>';
    echo '<th class="centrado">Nick</th>';
    echo '<th class="centrado">Nombre</th>';
    echo '<th class="centrado">Apellidos</th>';
    echo '<th class="centrado">Email</th>';
    echo '<th class="centrado">Telefono</th>';
    echo '<th class="centrado">DNI</th>';
    echo '<th class="centrado">Rol</th>';
    echo '<th colspan="2" class="centrado">Acciones</th>';
    echo '</tr>';


    while($row = $query->fetch(PDO::FETCH_ASSOC)){

      echo "<form class=\"form\" action=\"indexUpdate.php\" method=\"post\">";
      echo '<tr>';

      $id = $row['id'];
      echo "<input type=\"hidden\" name=\"id\" value=\"$id\">";


      echo '<td>'.$row['nick'].'</td>';
      $nick = $row['nick'];
      echo "<input type=\"hidden\" name=\"nick\" value=\"$nick\">";

      echo '<td>'.$row['nombre'].'</td>';
      $nombre = $row['nombre'];
      echo "<input type=\"hidden\" name=\"nombre\" value=\"$nombre\">";

      echo '<td>'.$row['apellidos'].'</td>';
      $apellidos = $row['apellidos'];
      echo "<input type=\"hidden\" name=\"apellidos\" value=\"$apellidos\">";

      echo '<td>'.$row['email'].'</td>';
      $email = $row['email'];
      echo "<input type=\"hidden\" name=\"email\" value=\"$email\">";

      echo '<td>'.$row['telefono'].'</td>';
      $telefono = $row['telefono'];
      echo "<input type=\"hidden\" name=\"telefono\" value=\"$telefono\" >";

      echo '<td>'.$row['dni'].'</td>';
      $dni = $row['dni'];
      echo "<input type=\"hidden\" name=\"dni\" value=\"$dni\">";

      echo '<td>'.$row['rol'].'</td>';
      $rol = $row['rol'];
      echo "<input type=\"hidden\" name=\"rol\" value=\"$rol\">";

      echo "<td><input type=\"submit\" name=\"enviar\" value=\"Actualizar\"></td>";
      echo '<td><a href="http://www.google.es" class="boton" name="button">Borrar</a></td>';
      echo '</tr>';
      echo "</form>";


    }

    echo '</table>';




     ?>
     </div>





  </body>
</html>

<?php






 ?>
