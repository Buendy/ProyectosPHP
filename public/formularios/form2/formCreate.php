



<form class="formulario" action="<?= $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">

  <p>
    <label for="nick">Nick</label> <?= mostrarErrorCampo('nick', $errores); ?>
  </p>

  <p>
    <input type="text" name="nick" <?= mostrarCampo('nick') ?> >
  </p>

  <p>
    <label for="nombre">Nombre</label> <?= mostrarErrorCampo('nombre', $errores); ?>
  </p>

  <p>
    <input type="text" name="nombre" <?= mostrarCampo('nombre') ?> >
  </p>

  <p>
    <label for="apellidos">Apellidos</label> <?= mostrarErrorCampo('apellidos', $errores); ?>
  </p>


  <p>
    <input type="text" name="apellidos" <?= mostrarCampo('apellidos') ?> >
  </p>

  <p>
    <label for="email">Email</label> <?= mostrarErrorCampo('email', $errores); ?>
  </p>

  <p>
    <input type="email" name="email" <?= mostrarCampo('email') ?> >
  </p>

  <p>
    <label for="telefono">Telefono</label> <?= mostrarErrorCampo('telefono', $errores); ?>
  </p>

  <p>
    <input type="text" name="telefono" placeholder="Ej: 618123456" <?= mostrarCampo('telefono') ?> >
  </p>


  <p>
    <label for="clave1">Contraseña</label> <?= mostrarErrorCampo('clave', $errores); ?>
  </p>

  <p>
    <input type="password" name="clave1">
  </p>

  <p>
    <label for="clave2">Repite contraseña</label>
  </p>

  <p>
    <input type="password" name="clave2">
  </p>

  <p>
    <label for="dni">DNI</label> <?= mostrarErrorCampo('dni', $errores); ?>
  </p>

  <p>
    <input type="text" name="dni" <?= mostrarCampo('dni') ?> >
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
    <label for="archivo">Subir una imagen</label>
  </p>

  <p>
    <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
    <input type="file" name="archivo"><?= mostrarErrorCampo('archivo', $errores); ?>
  </p>


  <p>
    <input type="submit" name="submit" value="Enviar">
  </p>




</form>
