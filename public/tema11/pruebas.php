<?php
include('select.php');

$select1 = new Select('ESPAÑA', 'ESPAÑA');
$select2 = new Select('FRANCIA', 'FRANCIA');



 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <select class="slect" name="slect">
      <?= $select1-> imprimete(); ?>
      <?= $select2-> imprimete(); ?>

    </select>

  </body>
</html>
