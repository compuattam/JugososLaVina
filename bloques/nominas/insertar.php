<?php
    require_once('../../conexion.php');

    if(isset($_POST['boton'])) {

        $fecha = $_POST['fecha'];
        $nombreTrabajador = $_POST['trabajador'];
        $diasLaborados = $_POST['diasLaborados'];
        $salarioDiario = $_POST['salarioDiario'];
        $auxilioTrans = $_POST['auxilioTransporte'];
        $seguridadSocial = $_POST['seguridadSocial'];
        $total = $_POST['total'];

        $insertar = "insert into nominas(fecha, nombre_trabajador, dias_laborados, salario_diario, auxilio_transporte, seguridad_social, Total)
        values('$fecha', $nombreTrabajador, $diasLaborados, $salarioDiario, $auxilioTrans, $seguridadSocial, $total)";

        mysqli_query($conexion, $insertar) or die ('no se inserto nomina');

        header("Location: ../../nominas.php");
    }
?>
