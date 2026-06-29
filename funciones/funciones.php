<?php
require "conexion.funciones.php";

function alta($nombre,$apellido,$email,$dni,$contraseña){
    //llamo a la funcion que contiene la conexion y la guardo en una variable
    $conexion = conexion();

    //creo una consulta para insertar datos a la tabla
    $sql = "select * from users where user_dni='$dni' ";

    if(mysqli_num_rows(mysqli_query($conexion,$sql))>0){
        $mensaje = "El usuario ya esta registrado";
    }
    else{

        $sql = "insert into users (user_nom, user_ape, user_email, user_dni, user_contraseña, rol_FK) 
        VALUES ('$nombre','$apellido','$email','$dni','$contraseña',1)";

        // Ejecuto la consulta
        $resultado = mysqli_query($conexion, $sql);

        // si la conexion me devolvio resultados significa que pudo cargar el producto
        if(mysqli_affected_rows($conexion)>0){
           $mensaje = "El usuario se ha registrado correctamente";
        } 
        else {
            $mensaje = "No se pudo cargar el usuario";
        }
    }
    return $mensaje;

}

function inicio_sesion($dni,$contraseña){
    $conexion = conexion();

    $SQL = "select * from users where user_dni='$dni' && user_contraseña='$contraseña'";
    $registro = mysqli_query($conexion, $SQL);
    // me traigo todo el registro del usuario 

    
    if(mysqli_num_rows($registro) > 0){
    // si la consulta me devolvio resultados significa que el usuario existe y la contraseña es correcta

        
        $fila = mysqli_fetch_assoc($registro);
        // obtengo el registro del usuario como un array asociativo clave => valor 

        $rol = $fila['rol_FK'];
        // ontengo el rol del usuario para redirigirlo a la pagina correspondiente

        if ($rol == 0) {
            return "admin.php";
        } else {
            return "docente.php";
        }
    } else {
        return false;
    }
}


require_once './PHPMailer_master/PHPMailer-master/src/Exception.php';
require_once './PHPMailer_master/PHPMailer-master/src/PHPMailer.php';
require_once './PHPMailer_master/PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function recuperar($email){
    $conexion = conexion();

    $sql = "select * from users where user_email='$email' ";
    $registro = mysqli_query($conexion,$sql);

    // verifico si me devuelve filas afectadas, entonces el correo existe en la base de datos
    if(mysqli_num_rows($registro)>0){
        // genero un codigo aleatorio de 6 digitos para enviar al correo del usuario
        $codigo = rand(100000,999999);
        
        // obtengo el registro del usuario como un array asociativo clave => valor 
        $fila = mysqli_fetch_assoc($registro);

        // obtengo el id del usuario para relacionarlo con el codigo de recuperacion
        $user_id = $fila['user_ID'];

        // inserto el codigo de recuperacion en la base de datos con una expiracion de 15 minutos
        $sql = "insert into codigo_recuperacion (user_FK, user_email, cod_codigo, cod_fecha_expiracion) values ('$user_id','$email','$codigo',DATE_ADD(NOW(), INTERVAL 15 MINUTE))";

        $resultado = mysqli_query($conexion,$sql);

        // Enviar correo

        // Configuración del correo creo el objeto PHPMailer
        $mail = new PHPMailer(true);

        // try catch para manejar errores al enviar el correo
        try {
            // Configuración del servidor SMTP
            $mail->isSMTP();
            // -> es un operador de objeto que permite acceder a los métodos y propiedades de un objeto en PHP
            $mail->Host = 'smtp.gmail.com';
            // Habilitar autenticación SMTP
            $mail->SMTPAuth = true;
            // Configuración de la cuenta de correo y contraseña de aplicación
            $mail->Username = 'escuelaisfdyt24@gmail.com';
            // Configuración de la contraseña de aplicación generada en Gmail
            $mail->Password = 'contraseña_de_aplicacion'; // App Password
            // Habilitar encriptación TLS
            $mail->SMTPSecure = 'tls';
            // Puerto para TLS
            $mail->Port = 587;
            // Configuración del correo
            $mail->setFrom('escuelaisfdyt24@gmail.com', 'Soporte Escuela24');
            // Destinatario
            $mail->addAddress($email);
            // Asunto y cuerpo del correo
            $mail->Subject = 'Código de recuperación';
            $mail->Body    = "Tu código de recuperación es: $codigo";

            // Enviar el correo, send() devuelve true si se envió correctamente, de lo contrario lanza una excepción
            $mail->send();
            // catch devuelve el error si no se pudo enviar el correo
        } catch (Exception $e) { // Exception es la clase de PHPMailer que maneja los errores
            // ErrorInfo es un atributo que contiene el mensaje de error del PHPMailer
            return "Error al enviar el correo.";
        }

    } else {
        return "Correo no encontrado.";
    }

}




?>