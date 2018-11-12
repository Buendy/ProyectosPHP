


<p class="centrado">
  <?= mostrarErrorCampo('pass', $errores); ?><br>
  <?= mostrarErrorCampo('email', $errores); ?>
</p>

<form class="formulario" action="<?= $_SERVER['PHP_SELF']?>" method="post">
  <p class="centrado">
    <label for="email" >Correo electrónico</label>
  </p>
  <p class="centrado">
    <input type="email" name="email" class="form-control campologin" <?= mostrarCampo('email') ?> >
  </p>

  <p class="centrado">
    <label for="pass" >Contraseña</label>
  </p>
  <p class="centrado">
    <input type="password" name="pass" class="form-control campologin">
  </p>


  <p class="centrado">
    <input type="submit" name="submit" value="Enviar" class="btn btn-success">
  </p>



</form>
