<?php 
require_once "conexion.funciones.php";

/*verifico si el email del usuario ya esta registrado */

function buscarUsuarioPorEmail($email) {
    $conexion = conexion();
    $sql = "SELECT * FROM users WHERE user_email = '$email'";
    $resultado = mysqli_query($conexion, $sql);
    
    if (mysqli_affected_rows($conexion) > 0) {
        return mysqli_fetch_assoc($resultado);
    } else {
        return false;
    }
}

/*verifico si el dni del usuario ya esta registrado */
function buscarUsuarioPorDni($dni) {
    $conexion = conexion();
    $sql = "SELECT * FROM users WHERE user_dni = '$dni'";
    $resultado = mysqli_query($conexion, $sql);
    if (mysqli_affected_rows($conexion) > 0) {
        return mysqli_fetch_assoc($resultado);
    } else {
        return false;
    }
}


?>