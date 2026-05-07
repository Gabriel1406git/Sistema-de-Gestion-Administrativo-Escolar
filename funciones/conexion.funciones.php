<?php
function conexion()
{
    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "";
    $dataBase = "sistema";
    $conexion = mysqli_connect($servidor, $usuario, $contraseña, $dataBase);

     if(!$conexion){
        echo "No se pudo conectar a la base de datos: ", $dataBase;
    }
    else{
        return $conexion;
    }

    
};
?>