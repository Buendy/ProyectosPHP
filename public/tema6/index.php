<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularios usables</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <h1>Formularios usables</h1>



    <?php
      include('funciones.php');
      $errores = [];
    if ( ! $_POST ) { //SI NO HAY DATOS LLAMA AL FORMULARIO

      include('formulario.php');

     } else {


       //PROCESAMOS EL FORMULARIO

       if ( ! isset($_POST['nombre'])){
         $errores['nombre'] = 'No he recibido el nombre';
       }elseif ( strlen($_POST['nombre']) < 3 ){ //SE COMPRUEBA LA LONGITUD DEL NOMBRE
         $errores['nombre'] = 'Campo nombre demasiado corto';
       }


       if ( ! isset($_POST['email']) ){
         $errores['email'] = 'No he recibido el email';
       }elseif ( strlen($_POST['email']) < 6 ){
         $errores['email'] = 'El email no es válido';
       }


       if ( ! isset($_POST['clave1']) || ! isset($_POST['clave2'])){
         $errores['clave'] = 'No he recibido ambas claves';
       }else {

         if ( strlen($_POST['clave1']) < 6 ){
           $errores['clave1'] = 'La clave ha de tener al menos 6 carácteres';
         }
         if ( $_POST['clave1'] != $_POST['clave2']){
           $errores['clave2'] = 'Las claves tienen que ser iguales';
        }

       }


      if ( $errores ){
          //mostrar_errores($errores);
          //echo '<br><a href="javascript:history.go(-1);">Volver al formulario</a>';
            include 'formulario.php';

      }else {
        echo 'Todo correcto, usuario registrado';
      }
    }

    ?>


  </body>
</html>
