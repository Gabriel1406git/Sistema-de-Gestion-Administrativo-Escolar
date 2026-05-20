<?php
require "conexion.funciones.php";

function alta($nombre,$apellido,$email,$dni,$contraseña){
    //llamo a la funcion que contiene la conexion y la guardo en una variable
    $conexion = conexion();

    //creo una consulta para insertar datos a la tabla
    $SQL = "insert into users (user_nom,user_ape,user_email,user_dni,
    user_contraseña,rol_FK) 
    VALUES ('$nombre','$apellido','$email','$dni','$contraseña',1)";

    // Ejecuto la consulta
    $resultado = mysqli_query($conexion, $SQL);
    // si la conexion me devolvio resultados significa que pudo cargar el producto
    
    if(mysqli_affected_rows($conexion)>0){
       $mensaje = "El usuario se ha registrado correctamente";
    } 
    else {
        $mensaje = "No se pudo cargar el usuario";
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

function recuperar($email){
    $conexion = conexion();

    $sql = "select * from users where user_email='$email' ";
    $registro = mysqli_query($conexion,$sql);

    if(mysqli_num_rows($registro)>0){

        $codigo = rand(100000,999999);

        $asunto = "Recuperacion de contraseña";
        $mensaje = "Tu codigo de recuperacion es: $codigo";
        $headers = "norespondersga@mail.com";
        $headers .= "Reply-To: norespondersga@mail.com\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        if(mail($email,$asunto,$mensaje,$headers)){
            $mensaje = "Codigo enviado correctamnete.";
        
        }
        else{
            $mensaje = "Error al enviar el codigo.";
           
        }
        
    } else {
        $mensaje= "Correo no encontrado";
    }
    return $mensaje;

}




?>