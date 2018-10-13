<?php

$texto = "Daniel12";

$in = preg_match_all("/[\d]/", $texto);

echo $in;


 ?>

 <p>
   <label for="usuario">Tipo de usuario</label>
 </p>

 <p>
   <select class="usuario" name="usuario">
     <option value="alumno">Alumno</option>
     <option value="Profesor">Profesor</option>
   </select>
 </p>

 "<?= $_SERVER['PHP_SELF']?>"
