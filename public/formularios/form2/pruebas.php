<?php


include('./lib/Dbpdo.php');
$_POST['email'] = 'buendy113@hotmail.com';
echo '<pre>';
$consulta = new Dbpdo();
//print_r($consulta->getUsers('users'));
$query = $consulta->getUsers('users');
echo '<table>';

echo '<tr>';
echo '<th>Nombre</th>';
echo '<th>Apellidos</th>';
echo '<th>Email</th>';
echo '<th>Telefono</th>';
echo '<th>DNI</th>';
echo '<th>Rol</th>';
echo '</tr>';


while($row = $query->fetch(PDO::FETCH_ASSOC)){

  echo '<tr>';
  echo '<td>'.$row['nombre'].'</td>';
  echo '<td>'.$row['apellidos'].'</td>';
  echo '<td>'.$row['email'].'</td>';
  echo '<td>'.$row['telefono'].'</td>';
  echo '<td>'.$row['dni'].'</td>';
  echo '<td>'.$row['rol'].'</td>';
  echo ''
  echo '</tr>';

}


echo '</table>';



?>
