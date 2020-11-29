<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LOGIN </title>
    <link rel="stylesheet" href="css/master.css">

  </head>
  <body>

    <div class="login-box">
      <br>
      <br>
      <img src="img/img1.jpg" class="avatar" alt="Avatar Image">
      <div class="iniciar"><span><br><h1>Inicio de Sesión</h1></span></div><br>

      <form class="" action="pages/validar_usuario.php" method="post">
        <!-- USERNAME INPUT -->
        <label for="username">Usuario</label>
        <input type="text" placeholder="Ingrese su usuario" name="login">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingrese su contraseña"name="password">
        <input type="submit" value="Iniciar Sesión" name="ok">
        <a style="font-size:96%" href="pages/registrar.php">¿Quieres registrarte?</a><br>
      </form>

      <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          setTimeout(function() {
            $(".content").fadeOut(1500);
          },3000);
        });
      </script>

      <?php
        if(isset($_SESSION['error']) || !empty($_SESSION['error'])){
          echo "<div class='content'><h4>".$_SESSION['error']."</h4></div>";
        }elseif(isset($_SESSION['aviso']) || !empty($_SESSION['aviso'])){
          echo "<div class='content'><h4>".$_SESSION['aviso']."</h4></div>";
        }
        session_unset();
      ?>

    </div>
  </body>
</html>
