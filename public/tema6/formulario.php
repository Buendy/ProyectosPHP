

<form action="<?= $_SERVER['PHP_SELF']?>" method="post">

<p>
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre"
    <?php mostrar_campo('nombre'); ?>
    >
    <?php mostrar_error_campo('nombre', $errores); ?>
</p>

<p>
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email"
   <?php mostrar_campo('email');?>
   >
    <?php mostrar_error_campo('email', $errores); ?>
</p>


<p>
    <label for="clave1">Clave</label>
    <input type="password" clas="form-control" name="clave1" value="">
    <?php mostrar_error_campo('clave1', $errores); ?>
</p>
<p>
    <label for="clave2">Clave2</label>
    <input type="password" clas="form-control" name="clave2" value="">
</p>


    <label>
    <input type="submit" name="" value="Enviar">
  </label>

  </div>

</form>
