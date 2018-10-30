<?php

//include('./lib/Dbpdo.php');
include('./models/Usuario.php');

echo 'Test de conexión: <br>';
$db = new Dbpdo();
//print_r($db->getConnection());

echo '<pre>';
//print_r($db->all());


$usuario = new Usuario();
//print_r($usuario->all());

$datos = ['nombre'   => 'Me quieroMORIR', 'email' => 'muerte@php.es', 'password' => '123456', 'edad' => '22'];


// $usuario_id = $usuario->insert($datos);
//
// echo 'El ID del nuevo usuario es: ' . $usuario_id;
// print_r($usuario->all());



//ESTO ES IUN INSERT
// try {
//   $usuario_id = $usuario->insert($datos);
//   echo 'El ID del nuevo usuario es: ' . $usuario_id;
//   print_r($usuario->all());
// } catch(Exception $e){
//   echo '<h1>ERROR: ' . $e->getMessage() . '</h1>';
// }


//ESTO ES UN UPDATE
// $clave_dato =['id' => 4];
//
// try{
//   $usuario->update($datos, $clave_dato);
// }catch (Exception $e){
//   echo '<h1>ERROR: ' . $e->getMessage() . '</h1>';
// }

// ESTO ES EL delete

// $clave_dato = ['id' => 7];
//
// try{
//   $usuario->delete($clave_dato);
// }catch (Exception $e){
//   echo '<h1>ERROR: ' . $e->getMessage() . '</h1>';
// }

//PROBAMOS EL MOETODO GETID
//print_r($usuario->getID(2));


//PROBAMOS LAS TRANSACCIONES

try{
  $usuario->setTransaction();
  $usuario->insert($datos);
  $usuario->endTransaction();
}catch (Exceprion $e){
  $usuario->cancelTransaction();
  echo '<p>ERROR: ' . $e->getMessage() . '</p>';
}

 ?>
