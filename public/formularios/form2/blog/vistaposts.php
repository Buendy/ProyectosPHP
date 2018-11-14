
      <?php
      include_once('../models/Post.php');
      include_once('../models/Users.php');
      session_start();
      $consulta = new Post();
      $autor = new Users();

      $query = $consulta->getPosts('posts');


      while ($row = $query->fetch(PDO::FETCH_ASSOC)){
        echo "<form class=\"form\" action=\"verpost.php\" method=\"post\">";
        $id = $row['id'];
        $_SESSION['usuarioQueEscribePost'] = $autor->getUser('users', $row['idUsuario']);

        echo "<input type=\"hidden\" name=\"id\" value=\"$id\">";
        echo "<div class=\"posts\"><p><h4 class=\"titulopost\">" . $row['titulo'] . " - ";
        echo $row['fecha'] . '</h4></p>';
        echo "<p>Post creado por: <i class=\"usuariopost\">" . $_SESSION['usuarioQueEscribePost'] . '</i></p>';
        echo "<p class=\"leerpost\"><input type=\"submit\" name=\"verpost\" class=\"btn btn-warning\" value=\"Leer más...\"></p></div>";
        echo "</form>";
      }

       ?>
