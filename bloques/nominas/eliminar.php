<?php 
    require_once('../../conexion.php');

    $nid = $_GET['id_nomina'];

    $eliminar = "delete from nominas where id_nomina = $nid";
    mysqli_query($conexion, $eliminar) or die ('no se borro la nómina');

    header("Location: ../../nominas.php");
?>