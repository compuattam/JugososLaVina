<?php 
    require_once('../../conexion.php');

    if(isset($_POST['boton'])) {

        $nit = $_POST['nit'];
        $razonS = $_POST['razonSocial'];
        $valorF = $_POST['valorFactura'];
        $fechaF = $_POST['fechaFactura'];

        $insertar = "insert into cuentasxcobrar(NIT, razon_social, valor_factura, fecha_factura) values ('$nit', '$razonS', $valorF, '$fechaF')";

        mysqli_query($conexion, $insertar) or die ('no inserto cuenta por cobrar');

        header("Location: ../../cuentasporcobrar.php"); 

    }
?>