<form class="formulario" action="<?= $_SERVER['PHP_SELF']?>" method="post">
  <p>
    <label for="correo">Correo electrónico</label>
  </p>
  <p>
    <input type="email" name="correo" <?= mostrarCampo('correo') ?> > <?= mostrarErrorCampo('correo', $errores); ?>
  </p>

  <p>
    <label for="clave">Contraseña</label>
  </p>
  <p>
    <input type="password" name="clave"> <?= mostrarErrorCampo('clave', $errores); ?>
  </p>

  <p>
    <input type="submit" name="submit" value="Enviar">
  </p>



</form>
