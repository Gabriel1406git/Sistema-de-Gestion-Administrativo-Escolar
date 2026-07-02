<?php 

require_once './PHPMailer_master/src/Exception.php';
require_once './PHPMailer_master/src/PHPMailer.php';
require_once './PHPMailer_master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function enviarCodigo($email, $codigo) {
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
        $mail->Password = 'iaeb clse zzjh fyyj'; // App Password
        // Habilitar encriptación TLS
        $mail->SMTPSecure = 'tls';
        // Puerto para TLS
        $mail->Port = 587;
        // Configuración del correo
        $mail->setFrom('escuelaisfdyt24@gmail.com', 'Soporte Escuela24');
        // Destinatario
        $mail->addAddress($email);
        // Asunto y cuerpo del correo
        $mail->Subject = 'Codigo de recuperacion';
        $mail->Body    = "Tu código de recuperacion es: $codigo";
        // Enviar el correo, send() devuelve true si se envió correctamente, de lo contrario lanza una excepción
        $mail->send();
        //develvo e codigo para verificarlo
        return $codigo;
        // catch devuelve el error si no se pudo enviar el correo.
    } catch (Exception $e) { // Exception es la clase de PHPMailer que maneja los errores
        return "Error al enviar el correo.";
    }
}

?>