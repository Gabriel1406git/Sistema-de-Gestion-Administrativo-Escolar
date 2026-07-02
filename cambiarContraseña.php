<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>

  <img class="fondo" src="multimedia/Fondo.png" alt="" />

  <div id="fondoTrasparente"> </div>

  <div class="escudo">
    <img src="multimedia/Escudo.png" alt="" />
  </div>
  <?php 
  require_once 'funciones/cambiarContraseña.funciones.php';
  require_once 'funciones/buscar.funciones.php';
  session_start();

  if ($usuario = buscarUsuarioPorEmail($_SESSION['email'])){

    if(isset($_POST['guardarCambios'])) {
      $contrasena = $_POST['contrasena'];
      $confirmarContrasena = $_POST['confirmarContrasena'];
      if ($contrasena == $confirmarContrasena) {

        if (cambiarContrasena($usuario['user_ID'], $contrasena)) {
          $mensajeExito = "<p class='mensaje'>Contraseña cambiada exitosamente.</p>";
          session_destroy();
        } else {
          $mensajeError = "<p class='mensaje'>Error al cambiar la contraseña.</p>";
        }

      } else {
        $mensajeError = "<p class='mensaje'>Las contraseñas no coinciden.</p>";
      }
    }

    ?>
    <div class="tarjeta_recuperar">
      <?php 

      if (isset($mensajeExito)) {
        echo $mensajeExito;
      ?>
      <a href="index.php"><input type="button" value="Volver"></a>


      <?php
      } else {
        if (isset($mensajeError)) {
          echo $mensajeError;
        }
        
      ?>
      <h2>Cree una nueva contraseña:</h2>
        <form  method="post">
              Contraseña: <input type="password" name="contrasena" maxlength="256" minlength="8" autofocus ><br>
              Confirmar contraseña: <input type="password" name="confirmarContrasena" maxlength="256" minlength="8" >
              <input type="submit" value="cancelar" name="cancelar" formaction="index.php">
              <input type="submit" value="Guardar" name="guardarCambios">
        </form>
      </form>

      <?php
      }
      ?>
    </div>

    <?php 
    
  }
  ?>
</body>
</body>
</html>