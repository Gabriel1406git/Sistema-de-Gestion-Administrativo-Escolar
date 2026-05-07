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

    // si la consulta me devolvio resultados significa que el usuario existe y la contraseña es correcta
    if(mysqli_num_rows($registro) > 0){
        // obtengo el registro del usuario que inicio sesion
        $fila = mysqli_fetch_assoc($registro);
        // ontengo el rol del usuario para redirigirlo a la pagina correspondiente
        $rol = $fila['rol_FK'];
        if ($rol == 0) {
            return "admin.php";
        } else {
            return "docente.php";
        }
    } else {
        return false;
    }
}


 
?>