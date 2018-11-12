



<form class="formulario" action="<?= $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">

      <br><p class="titformulario centrado">Formulario de registro</p>


  <div class="row">
  <div class="col-md-4">
    <p>
      <label for="nick" class="formulario">Nick</label><?= mostrarErrorCampo('nick', $errores); ?>
    </p>

    <p>
      <input type="text" name="nick" class="form-control formulario ancho" <?= mostrarCampo('nick') ?> >
    </p>

    <p>
      <label for="nombre" class="formulario">Nombre</label><?= mostrarErrorCampo('nombre', $errores); ?>
    </p>

    <p>
      <input type="text" name="nombre" class="form-control formulario ancho" <?= mostrarCampo('nombre') ?> >
    </p>

    <p>
      <label for="apellidos" class="formulario">Apellidos</label><?= mostrarErrorCampo('apellidos', $errores); ?>
    </p>


    <p>
      <input type="text" name="apellidos" class="form-control formulario ancho" <?= mostrarCampo('apellidos') ?> >
    </p>


    <p>
      <label for="email" class="formulario">Email</label><?= mostrarErrorCampo('email', $errores); ?>
    </p>

    <p>
      <input type="email" name="email" class="form-control formulario ancho" <?= mostrarCampo('email') ?> >
    </p>


    <p>
      <label for="telefono" class="formulario">Telefono</label><?= mostrarErrorCampo('telefono', $errores); ?>
    </p>

    <p>
      <input type="text" name="telefono" class="form-control formulario ancho" placeholder="Ej: 618123456" <?= mostrarCampo('telefono') ?> >
    </p>


    <p>
      <label for="clave1" class="formulario">Contraseña</label><?= mostrarErrorCampo('clave', $errores); ?>
    </p>

    <p>
      <input type="password" name="clave1" class="form-control formulario ancho">
    </p>

    <p>
      <label for="clave2" class="formulario">Repite contraseña</label>
    </p>

    <p>
      <input type="password" name="clave2" class="form-control formulario ancho">
    </p>

    <p>
      <label for="dni" class="formulario">DNI</label><?= mostrarErrorCampo('dni', $errores); ?>
    </p>

    <p>
      <input type="text" name="dni" class="form-control  formulario ancho" <?= mostrarCampo('dni') ?> >
    </p>



  </div>

    <div class="col-md-1">

    </div>
  <div class="col-md-3"><br><br><br><br><br><br>

    <p>
      <label for="rol" class="formulario">Tipo de usuario</label>
    </p>

    <p>
      <select class="rol" name="rol">
        <option value="alumno">Alumno</option>
        <option value="profesor">Profesor</option>
      </select>
    </p>
    <p>
      <?= mostrarErrorCampo('rol', $errores); ?>
    </p>

    <p>
      <label for="archivo" class="formulario" >Subir una imagen</label>
    </p>

    <p>
      <input type="hidden" name="MAX_FILE_SIZE" value="5000000" >
      <input type="file" name="archivo" class="btn btn-success">
    </p>
    <p><?= mostrarErrorCampo('archivo', $errores); ?></p>


  </div>
</div>

<div class="row">
  <div class="col-md-4">

  </div>
  <div class="col-md-1"><br><br>
    <p>
      <input type="submit" name="submit" value="Enviar" class="btn btn-success" id="btn-form">
    </p>

  </div>
  <div class="col-md-3">

  </div>

</div>









</form>
