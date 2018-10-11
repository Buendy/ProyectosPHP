<div class="container col-xs-6">


  <form class="" action="<?= $_SERVER['PHP_SELF']?> " method="post">
    <h3>Introduce tu horario de citas</h3>
    <div class="form-group">
      <label for="cita">Fecha:</label>
      <input type="text" class='form-control' name="cita" id="cita" placeholder="dd/mm/aaaa" value="">
    </div>

    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" name="nombre" value="" placeholder="Tu nombre">
    </div>
    <button type="submit" class="btn btn-default" name="button">Agregar cita</button>


  </form>


</div>
