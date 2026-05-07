<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/x-icon" href="multimedia/Escudo.png">
  <title>Document</title>
</head>
<body>
<div id="fondoTrasparente"> </div>
<img class="fondo" src="multimedia/Fondo.png" alt="">

<div class="escudo">
  <img src="multimedia/Escudo.png" alt="">
</div>

<?php 
require_once 'funciones/funciones.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $dni = $_POST['dni'];
  $email = $_POST['email'];
  $contraseña = $_POST['contraseña'];
  $repetir = $_POST['repetir'];

  // Validar que las contraseñas coincidan
  if ($contraseña != $repetir) {
    $mensaje = "<h3>Las contraseñas no coinciden.</h3>";
   
    
  } else {
    $exito = alta($nombre, $apellido, $email, $dni, $contraseña) ;

    echo "<div class='exito'><h3>$exito</h3></div>";

  }
}


?>

<div class="tarjeta_registro">
  <form action="#" method="post">
    <div class="campo">
      <p>Nombre:</p><input type="text" name="nombre" maxlength="15" minlength="3" required><br>
    </div>
    <div class="campo">
      <p>Apellido:</p><input type="text" name="apellido"   maxlength="15" minlength="3" required><br>
    </div>
    <div class="campo">
      <p>DNI:</p><input type="number" name="dni"  max="99999999" min="10000000" required><br>
    </div>
    <div class="campo">
      <p>Email:</p><input type="email" name="email" maxlength="256" required><br>
    </div>
    <div class="campo">
      <p>Contraseña:</p><input type="password" name="contraseña" maxlength="256" minlength="8" required><br>
    </div>
    <div class="campo">
      <?php if (isset($mensaje)) { echo $mensaje; } ?>
      <p>Repetir Contraseña:</p><input type="password" name="repetir" maxlength="256" minlength="8" required><br>
    </div>

    <a href="index.php"><input type="button" value="Volver"></a>
   
    <input type="submit" value="Registrar">
    
    

  </form>
</div>


  
</body>
</html>