<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <link rel="icon" type="image/x-icon" href="multimedia/Escudo.png">
  <title>Escuela 24</title>
  
</head>
<body>
<div id="fondoTrasparente"> </div>
<img class="fondo" src="multimedia/Fondo.png" alt="">

<div class="escudo">
  <img src="multimedia/Escudo.png" alt="">
</div>

<?php 
require_once 'funciones/funciones.php';
if (isset($_POST['registrar'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $dni = $_POST['dni'];
  $email = $_POST['email'];
  $contraseña = $_POST['contraseña'];
  $repetir = $_POST['repetir'];
  /* verifico si el nombre o apellido contienen números */
  if (preg_match('/[0-9]/', $nombre) || preg_match('/[0-9]/', $apellido) ) {
    $mensajeNombreApellido = "<p class='mensaje'>El nombre y apellido no pueden contener números.</p>";
  } 
  
  
  // Validar que las contraseñas coincidan
  if ($contraseña != $repetir) {
    $mensajeContraseña = "<p class='mensaje'>Las contraseñas no coinciden.</p>";
  } else {
    $exito = alta($nombre, $apellido, $email, $dni, $contraseña) ;
    $mensajeresul = "class='mensaje'><p>$exito</p>";
  
  }
}


?>

<div class="tarjeta_registro">
  <?php 
  if (isset($mensajeresul)) {
    echo $mensajeresul;
  }
  if (isset($mensajeNombreApellido)) {
    echo $mensajeNombreApellido;
  }
  if (isset($mensajeContraseña)) {
    echo $mensajeContraseña;
  }
  ?>
  <form action="#" method="post">
    <div class="campo">
      <p>Nombre:</p><input type="text" name="nombre" maxlength="15" minlength="3"  pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" title="El nombre solo puede contener letras" autofocus placeholder="Juancito" required><br>
    </div>
    <div class="campo">
      <p>Apellido:</p><input type="text" name="apellido"   maxlength="15" minlength="3"   pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" title="El apellido solo puede contener letras" placeholder="Rodriguez" required><br>
    </div>
    <div class="campo">
      <p>DNI:</p><input type="number" name="dni"  max="99999999" min="10000000" title="El DNI debe ser un número de 8 dígitos" placeholder="12345678" required><br>
    </div>
    <div class="campo">
      <p>Email:</p><input type="email" name="email" maxlength="256" title="Ingrese un correo electrónico válido" placeholder="juancito@example.com" required><br>
    </div>
    <div class="campo">
      <p>Contraseña:</p><input type="password" name="contraseña" maxlength="256" minlength="8" title="La contraseña debe tener al menos 8 caracteres" placeholder="Ingrese su contraseña" required><br>
    </div>
    <div class="campo">
      <p>Repetir Contraseña:</p><input type="password" name="repetir" maxlength="256" minlength="8" title="Repita su contraseña" placeholder="Repita su contraseña" required><br>
    </div>

    <a href="index.php"><input type="button" value="Volver"></a>
   
    <input type="submit" name="registrar" value="Registrar">
    
    

  </form>
</div>


  
</body>
</html>