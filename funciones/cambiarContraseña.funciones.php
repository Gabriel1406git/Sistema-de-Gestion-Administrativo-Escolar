<?php 
require "conexion.funciones.php";

function cambiarContrasena($user_id, $nuevaContraseña) {
    $conexion = conexion();

    $sql = "UPDATE users SET user_contraseña='$nuevaContraseña' WHERE user_ID='$user_id'";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_affected_rows($conexion) > 0) {
        return true; // Contraseña actualizada correctamente
    } else {
        return false; // No se pudo actualizar la contraseña
    }
}


?>