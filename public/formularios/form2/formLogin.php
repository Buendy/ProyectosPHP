<form class="formulario" action="<?= $_SERVER['PHP_SELF']?>" method="post">
  <p>
    <label for="email">Correo electrónico</label>
  </p>
  <p>
    <input type="email" name="email" <?= mostrarCampo('email') ?> > <?= mostrarErrorCampo('email', $errores); ?>
  </p>

  <p>
    <label for="pass">Contraseña</label>
  </p>
  <p>
    <input type="password" name="pass"> <?= mostrarErrorCampo('pass', $errores); ?>
  </p>

  <p>
    <input type="submit" name="submit" value="Enviar">
  </p>



</form>
