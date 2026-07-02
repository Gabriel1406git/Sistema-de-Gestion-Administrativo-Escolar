<?php 
require_once "conexion.funciones.php";

/*funcion para iniciar sesion de un usuario DOCENTE*/
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
?>