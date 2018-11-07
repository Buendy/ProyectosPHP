<?php
include_once('funciones.php'); ?>

<form class="formulario" action="indexUpdate.php" method="post" enctype="multipart/form-data">

  <input type="hidden" name="id" <?= mostrarCampo('id') ?>>
  <p>
    <label for="nick">Nick</label>
  </p>

  <p>
    <input type="text" name="nick" <?= mostrarCampo('nick') ?> > <?= mostrarErrorCampo('nick', $errores); ?>
  </p>

  <p>
    <label for="nombre">Nombre</label>
  </p>

  <p>
    <input type="text" name="nombre" <?= mostrarCampo('nombre') ?> > <?= mostrarErrorCampo('nombre', $errores); ?>
  </p>

  <p>
    <label for="apellidos">Apellidos</label>
  </p>


  <p>
    <input type="text" name="apellidos" <?= mostrarCampo('apellidos') ?> > <?= mostrarErrorCampo('apellidos', $errores); ?>
  </p>

  <p>
    <label for="email">Email</label>
  </p>

  <p>
    <input type="email" name="email" <?= mostrarCampo('email') ?> > <?= mostrarErrorCampo('email', $errores); ?>
  </p>

  <p>
    <label for="telefono">Telefono</label>
  </p>

  <p>
    <input type="text" name="telefono" placeholder="Ej: 618123456" <?= mostrarCampo('telefono') ?> > <?= mostrarErrorCampo('telefono', $errores); ?>
  </p>

  <p>
    <label for="dni">DNI</label>
  </p>

  <p>
    <input type="text" name="dni" <?= mostrarCampo('dni') ?> > <?= mostrarErrorCampo('dni', $errores); ?>
  </p>

  <p>
    <label for="rol">Tipo de usuario</label>
  </p>

  <p>
    <select class="rol" name="rol">
      <option value="alumno">Alumno</option>
      <option value="profesor">Profesor</option>
    </select> <?= mostrarErrorCampo('rol', $errores); ?>
  </p>


  <p>
    <input type="submit" name="submit" value="Enviar">
  </p>




</form>
