<?php 
    require_once('../../conexion.php');

    $pid = $_GET['id_proveedor'];

    $eliminar = "delete from proveedores where id_proveedor = $pid";
    
    mysqli_query($conexion, $eliminar) or die ('no se elimino el proveedor');

    header("Location: ../../proveedores.php");  
?>