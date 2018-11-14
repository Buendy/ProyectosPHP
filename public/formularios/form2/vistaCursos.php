<?php include_once('./funciones.php');
      include_once('./models/Curso.php');?>






<div class="row">
  <div class="col-md-3">

  </div>
  <div class="col-md-6">
    <div align="center">
      <?php
      if(!isset($_SESSION['rol']['roldeusuario']) || $_SESSION['rol']['roldeusuario'] != 'profesor')
      {
        volver();
      }else{



        $consulta = new Curso();
        $query = $consulta->UserCurso($_POST['nombre']);
        //$row = $query->fetch(PDO::FETCH_ASSOC);

        if($query->rowCount()){
          cursos($query);
          echo '<br><a  href="viewusuarios.php" class="btn btn-success">Volver</a><br><br>';
        }else {
          echo '<br><br><p class="listaErrores">Este alumno no está matriculado en ningun curso</p><br><br>';
          echo '<a  href="viewusuarios.php" class="btn btn-success">Volver</a><br><br>';
        }

      }
      ?>
    </div>


  </div>
</div>
