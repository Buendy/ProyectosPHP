
<h1>Presentando datos por GET</h1>
<p>El nombre es <?=isset($_GET['nombre']) ? $_GET['nombre'] : 'No tiene nombre '  ?></p>
<p>El apellido es <?=isset($_GET['apellido']) ? $_GET['apellido'] : 'No tiene apellido ' ?></p>
<p>El email es <?= isset($_GET['email']) ? $_GET['email'] : 'No tiene email ' ?></p>
