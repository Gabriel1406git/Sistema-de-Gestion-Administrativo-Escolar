<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="icon" type="image/x-icon" href="multimedia/Escudo.png" />
    <title>Escuela 24</title>
  </head>
  <body>
    <img class="fondo" src="multimedia/Fondo.png" alt="" />
    <div id="fondoTrasparente"> </div>

    <div class="escudo">
      <img src="multimedia/Escudo.png" alt="" />
    </div>

    <?php
    require_once 'funciones/inicio_sesion.funciones.php';


    if(isset($_POST['ingresar'])){
        $dni = $_POST['dni'];
        $contraseña = $_POST['contraseña'];
  
        $direccion = inicio_sesion($dni, $contraseña);

        if ($direccion ) {
          // redirijo al usuario a la pagina correspondiente segun su rol
            header("Location: $direccion");
            exit();
        }
        else {
          $mensajeError = "<h3>DNI O CONTRASEÑA INCORECTOS.</h3>";
        }

        
    }

    ?>

    <div class="tarjeta_login">
      <?php
        if(isset($mensajeError)){
          echo $mensajeError;
        }
        ?>
      <form action="#" method="post">
        <div class="campo">
          <p>DNI:</p><input type="number" name="dni" max="99999999" min="10000000" autofocus required><br>
        </div>

        <div class="campo">
          <p>Contraseña:</p><input type="password" name="contraseña" maxlength="256" minlength="8" required><br>
        </div>

        <div class="botones">
          <a href="enviarCodigoRecupera.php"><input type="button" value="Olvide mi contraseña"></a>
          <a href=""><input type="submit" name="ingresar" ></a>
        </div>
        
        <a href="registro.php"><input type="button" value="Registrar"></a>

      </form>
    </div>
  </body>
</html>
