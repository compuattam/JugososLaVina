<?php 
    require_once('../../conexion.php');

    $iid = $_GET['id_producto'];

    $eliminar = "delete from producto where id_producto = $iid";
    mysqli_query($conexion, $eliminar) or die ('no se borro producto');

    header("Location: ../../inventario.php");
?>