<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

<p>
  <label for="nombre">Nombre</label>
  <input type="text" name="nombre" value="">
</p>
<p>
  <label for="email">Email</label>
  <input type="email" name="email" value="">
</p>
<p>
  <label for="clave1">Clave</label>
  <input type="password" name="clave[original]" value="">
</p>
<p>
  <label for="clave2">Repetir clave</label>
  <input type="password" name="clave[repetida]" value="">
</p>
<p>
  <label for="intereses">intereses</label>
  <select class="" name="intereses[]" multiple>
    <option value="nadar">Nadar</option>
    <option value="correr">Correr</option>
    <option value="reir">Reir</option>
    <option value="llorar">Llorar</option>
  </select>
</p>
<p>
  <label>
    <input type="submit" name="registrarse" value="Enviar">
    <input type="submit" name="registrarse" value="Cancelar">
  </label>
</p>

</form>
