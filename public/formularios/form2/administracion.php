<?php include_once('./funciones.php')?>


    <?php
    session_start();

    if(!isset($_SESSION['rol']['roldeusuario']) || $_SESSION['rol']['roldeusuario'] != 'profesor'){
        volver();
    }else{


      include('viewusuarios.php');
      echo '<p class="centrado">';
      echo '<a  href="index.html" class="btn btn-success">Volver a la página principal</a><br><br>';
      echo '<a  href="logout.php" class="btn btn-success">Cerrar sesión</a><br>';
      echo '</p>';
    }



     ?>

  </body>
</html>
