<?php 
    require_once('../../conexion.php');

    $cxcid = $_GET['id_cobrar'];

    $eliminar = "delete from cuentasxcobrar where id_cobrar = $cxcid";
    mysqli_query($conexion, $eliminar) or die ('no se borro cuenta por cobrar');

    header("Location: ../../cuentasporcobrar.php");
?>