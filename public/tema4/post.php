<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Uso de post</title>
  </head>
  <body>
    <?php


if(!$_POST){
  include 'formulario.php';
} else {

echo "HOLA";


      if (isset($_POST['registrarse']) && $_POST['registrarse'] == 'Enviar') {

        echo 'Muchas gracias por registrarse en mi sistema';

      }elseif (isset($_POST['registrarse']) && $_POST['registrarse'] == 'Cancelar' ){

        echo 'Que pena!!! Tu te lo pierdes';

      } else {

        echo 'Operación no permitida';

      }

      if (isset($_POST['nombre'])) {
        echo  '<br> Tu nombre es: ' . $_POST['nombre'] . '<br>';
      }

      if (isset($_POST['email'])) {
        echo  'Tu email es: ' . $_POST['email'] . '<br>';
      }

      if ($_POST['clave']['original'] == $_POST['clave']['repetida']){
        echo 'Tu clave es correcta <br>';
      }else {
        echo 'Las claves no son iguales <br>';
      }


}

?>

  </body>
</html>
