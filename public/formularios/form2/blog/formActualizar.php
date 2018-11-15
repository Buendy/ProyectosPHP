<?php
if(!isset($errores)){
  $errores = [];
}
include_once('../funciones.php');

 ?>


<form class="" action="indexActualizar.php" method="post">
  <input type="text" name="id" value="<?= $_POST['id'] ?>" hidden>
  <p>
    <label for="titulo">Titulo</label> <?= mostrarErrorCampo('titulo', $errores); ?>
  </p>

  <p>
    <input type="text" name="titulo" class="form-control" <?= mostrarCampo('titulo') ?> >
  </p>

  <p>
    <label for="cuerpo">Cuerpo</label><?= mostrarErrorCampo('cuerpo', $errores); ?>
  </p>

  <p>
    <textarea name="cuerpo" rows="20" cols="100" ><?= mostrarCampoCuerpo('cuerpo') ?></textarea>
  </p>

  <p>
    <input type="submit" name="actualizar" value="Actualizar">
  </p>

</form>
