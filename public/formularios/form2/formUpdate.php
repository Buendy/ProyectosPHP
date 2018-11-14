<?php
include_once('funciones.php'); ?>

<br><p class="titformulario centrado">Actualización de usuarios</p>
<div class="row">
<div class="col-md-4">
<form class="formulario" action="indexUpdate.php" method="post" enctype="multipart/form-data">


  <input type="hidden" name="id" <?= mostrarCampo('id') ?>>
  <p>
    <label for="nick" class="formulario">Nick</label> <?= mostrarErrorCampo('nick', $errores); ?>
  </p>

  <p>
    <input type="text" name="nick" class="form-control formulario ancho" <?= mostrarCampo('nick') ?> >
  </p>

  <p>
    <label for="nombre" class="formulario">Nombre</label> <?= mostrarErrorCampo('nombre', $errores); ?>
  </p>

  <p>
    <input type="text" name="nombre" class="form-control formulario ancho" <?= mostrarCampo('nombre') ?> >
  </p>

  <p>
    <label for="apellidos" class="formulario">Apellidos</label> <?= mostrarErrorCampo('apellidos', $errores); ?>
  </p>


  <p>
    <input type="text" name="apellidos" class="form-control formulario ancho" <?= mostrarCampo('apellidos') ?> >
  </p>

  <p>
    <label for="email" class="formulario">Email</label> <?= mostrarErrorCampo('email', $errores); ?>
  </p>

  <p>
    <input type="email" name="email" class="form-control formulario ancho" <?= mostrarCampo('email') ?> >
  </p>

  <p>
    <label for="telefono" class="formulario">Telefono</label> <?= mostrarErrorCampo('telefono', $errores); ?>
  </p>

  <p>
    <input type="text" name="telefono" class="form-control formulario ancho" placeholder="Ej: 618123456" <?= mostrarCampo('telefono') ?> >
  </p>

  <p>
    <label for="dni" class="formulario">DNI</label> <?= mostrarErrorCampo('dni', $errores); ?>
  </p>

  <p>
    <input type="text" name="dni" class="form-control formulario ancho" <?= mostrarCampo('dni') ?> >
  </p>

  <p>
    <label for="rol" class="formulario">Tipo de usuario</label>
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
</div>
</div>
