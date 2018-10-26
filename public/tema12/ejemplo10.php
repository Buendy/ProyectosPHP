<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pruebas mysql</title>
    <link rel="stylesheet" href="estilitos.css">
  </head>
  <body>

<?php

echo 'Estableciendo conexión con la BD...<br>';

$host = 'mysql';
$port = '3306';
$dbname = 'tema12';
$user = 'default';
$password = 'secret';


$dsn = 'mysql:host='. $host . ';port=' . $port . ';dbname=' . $dbname;

$options = [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
  $connection = new PDO($dsn, $user, $password, $options);
  echo 'Ya estamos conectados a la BD';
} catch (PDOException $e) {
  echo "Error en la conexión: " . $e->getMessage();
}

$query = $connection->query("SELECT * FROM users");

?>
<pre>
<table>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Email</th>
  </tr>
  <?php

    while ($row = $query->fetch(PDO::FETCH_ASSOC)){
      echo '<tr>';
      echo '<td>'.$row['id'].'</td>';
      echo '<td>'.$row['first_name'].'</td>';
      echo '<td>'.$row['last_name'].'</td>';
      echo '<td>'.$row['email'].'</td>';
      echo '</tr>';
    }

    ?>

</table>
</pre>


  </body>
</html>
