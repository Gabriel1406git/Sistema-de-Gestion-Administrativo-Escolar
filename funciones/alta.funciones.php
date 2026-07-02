<?php 
require_once "conexion.funciones.php";
require_once "buscar.funciones.php";

/*funcion para crear un nuevo usuario DOCENTE */
function alta($nombre,$apellido,$email,$dni,$contraseña){
    //llamo a la funcion que contiene la conexion y la guardo en una variable
    $conexion = conexion();
    
    /*verifico si el email o dni del usuario ya esta registrado */
    if (buscarUsuarioPorDni($dni)) {
        $mensaje = "El usuario ya esta registrado";

    } elseif (buscarUsuarioPorEmail($email)) {
        $mensaje = "El correo ya esta registrado";

        
    } else {
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



?>