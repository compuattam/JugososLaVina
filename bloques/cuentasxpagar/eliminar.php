<?php 
    require_once('../../conexion.php');

    $cxpid = $_GET['id_pagar'];

    $eliminar = "delete from cuentasxpagar where id_pagar = $cxpid";
    mysqli_query($conexion, $eliminar) or die ('no se borro cuenta por pagar');

    header("Location: ../../cuentasporpagar.php");
?>