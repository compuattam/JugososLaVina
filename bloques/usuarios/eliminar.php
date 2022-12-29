<?php 
    require_once('../../conexion.php');

    $userid = $_GET['id_usuario'];

    $eliminar = "delete from usuario where id_usuario = $userid";

    mysqli_query($conexion, $eliminar) or die ('no se elimino el usuario');

    header("Location: ../../usuarios.php");
?>