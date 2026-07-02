<?php 
require_once "conexion.funciones.php";
require_once "buscar.funciones.php";
require_once "enviarCodigo.funciones.php";


function generarCodigo($email){
    $conexion = conexion();

    $fila = buscarUsuarioPorEmail($email);

    // verifico si me devuelve filas afectadas, entonces el correo existe en la base de datos
    if($fila){
        // genero un codigo aleatorio de 6 digitos para enviar al correo del usuario entre 100000 y 999999
        $codigo = rand(100000,999999);
        
        // obtengo el registro del usuario como un array asociativo clave => valor 

        // obtengo el id del usuario para relacionarlo con el codigo de recuperacion
        $user_id = $fila['user_ID'];

        // inserto el codigo de recuperacion en la base de datos con una expiracion de 15 minutos
        $sql = "insert into codigo_recuperacion (user_FK, user_email, cod_codigo, cod_fecha_expiracion) 
        values ('$user_id','$email','$codigo',DATE_ADD(NOW(), INTERVAL 15 MINUTE))";

        $resultado = mysqli_query($conexion,$sql);
        if(mysqli_affected_rows($conexion)>0){
            // si se inserto correctamente el codigo de recuperacion, envio el correo con el codigo
            return enviarCodigo($email, $codigo);

        }
        
    }else {
        return "Correo no encontrado.";
    }

}

?>