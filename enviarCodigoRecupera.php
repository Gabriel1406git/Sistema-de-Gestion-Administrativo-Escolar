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
  require_once 'funciones/generarCodigo.funciones.php';

  session_start();

  if (isset($_POST['enviarCorreo'])){
    
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['codigoGenerado'] = generarCodigo($_POST['email']);
  }


  if (!isset($_POST['enviarCorreo']) && !isset($_POST['enviarCodigo'])) {
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



  /* si existe un código generado  el resultado es una cadena significa que el envio no funcino y devuelve un mensaje de error */
  else if (isset($_SESSION['codigoGenerado']) && is_string($_SESSION['codigoGenerado'])) {
    echo "<p class='mensaje'>{$_SESSION['codigoGenerado']}</p>";
    ?>
    <a href="index.php"><input type="button" value="Volver"></a> 
    <?php
  }
  
  else {
    if(isset($_POST['enviarCodigo'])){
      $codigoIngresado = $_POST['codigo'];
      if($codigoIngresado == $_SESSION['codigoGenerado']){
        header("Location: cambiarContraseña.php");
        exit();
      } else {
        echo "<p class='mensaje'>Código incorrecto.</p>";
      }

    }
    
  ?>
    
    <h2>Escribir el código enviado:</h2>
    <form action="#" method="post">
      <div class="campo">
        <p>Codigo:</p><input type="password" name="codigo" maxlength="6" minlength="6" required><br>
      </div>

      <a href="index.php"><input type="button" value="Volver"></a>
      <input type="submit" name="enviarCodigo" value="Enviar">
    </form>


    <?php 
    

    ?>
  </div>
  <?php 
    
  }
  ?>

</body>

</html>