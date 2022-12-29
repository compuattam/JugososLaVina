<?php 
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "jugososlavina";

    $conexion = mysqli_connect($servidor, $usuario, $clave) or die ('No se conecto a mysql');
    mysqli_select_db($conexion, $bd) or die ('No se conecto a la base de datos jugososlavina');
?>