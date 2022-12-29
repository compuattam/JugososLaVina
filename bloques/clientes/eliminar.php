<?php
    require_once('../../conexion.php');

    $cid = $_GET['id_clientes'];

    $eliminar = "delete from clientes where id_clientes = $cid";
    mysqli_query($conexion, $eliminar) or die ('no se borro cliente');

    header('Location: ../../clientes.php');
?>