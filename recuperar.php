<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Recuperación de Cuenta</title>
</head>

<body>

  <img class="fondo" src="multimedia/Fondo.png" alt="" />

  <div class="escudo">
    <img src="multimedia/Escudo.png" alt="" />
  </div>

  <div class="tarjeta_recuperar">

    <h2>Escribir tu correo electrónico:</h2>

    <form action="#" method="post">
      <div class="campo">
        <p>Correo:</p><input type="email" maxlength="100" required><br>
      </div>

      <input type="submit" value="Enviar">
    </form>
    <h2>Escribir el código enviado:</h2>
    <form action="#" method="post">
      <div class="campo">
        <p>Contraseña:</p><input type="password" maxlength="256" minlength="8" required><br>
      </div>

      <a href="index.php"><input type="button" value="Volver"></a>
      <input type="submit" value="Enviar">
    </form>
  </div>

</body>

</html>