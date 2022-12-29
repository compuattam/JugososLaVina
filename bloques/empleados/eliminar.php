<?php 
    require_once('../../conexion.php');

    $eid = $_GET['id_empleado'];

    $eliminar = "delete from empleado where id_empleado = $eid";
    mysqli_query($conexion, $eliminar) or die ('no se elimino el empleado');

    header("Location: ../../Empleados.php");
?>