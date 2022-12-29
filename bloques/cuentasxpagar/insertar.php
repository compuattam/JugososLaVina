<?php 
    require_once('../../conexion.php');

    if(isset($_POST['boton'])) {

        $ref = $_POST['ref'];
        $nombre = $_POST['nombre'];
        $valor = $_POST['valor'];
        $fecha = $_POST['fecha'];

        $insertar = "insert into cuentasxpagar(ref_factura, nombre, valor, fecha) values ('$ref', '$nombre', $valor, '$fecha')";

        mysqli_query($conexion, $insertar) or die ('no se inserto cuenta por pagar');

        header("Location: ../../cuentasporpagar.php");
    }
?>