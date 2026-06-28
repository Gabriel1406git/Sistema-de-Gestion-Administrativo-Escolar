<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <title>Escuela 24</title>
</head>

<body>

  <img class="fondo" src="multimedia/Fondo.png" alt="" />

  <div id="fondoTrasparente"> </div>

  <div class="escudo">
    <img src="multimedia/Escudo.png" alt="" />
  </div>

  <div class="tarjeta_recuperar">
  <?php 
  require_once 'funciones/funciones.php';
  if (isset($_POST['enviarCorreo'])){
    $email = $_POST['email'];
    $resultado = recuperar($email);
  }
  if (!isset($email)){
  ?>
    <h2>Escribe tu correo electrónico:</h2>

    <form action="#" method="post">
      <div class="campo">
        <p>Correo:</p><input type="email" name="email" maxlength="100" required><br>
      </div>
      <a href="index.php"><input type="button" value="Volver"></a>
      <input type="submit" name="enviarCorreo" value="Enviar" >
    </form>
  <?php 
  } 
  else if ($resultado == "Error al enviar el correo." || $resultado == "Correo no encontrado.") {
    echo "<p class='mensaje'>$resultado</p>";
    ?>
    <a href="index.php"><input type="button" value="Volver"></a> 
    <?php
  }
  
  else {
    echo "<p class='mensaje'>$resultado</p>";
  ?>
  
    <h2>Escribir el código enviado:</h2>
    <form action="#" method="post">
      <div class="campo">
        <p>Contraseña:</p><input type="password" maxlength="256" minlength="8" required><br>
      </div>

      <a href="index.php"><input type="button" value="Volver"></a>
      <input type="submit" value="Enviar">
    </form>
  </div>
  <?php 
  }
  ?>

</body>

</html>