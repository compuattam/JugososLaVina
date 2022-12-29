<?php

    $nid = $_GET['id_nomina'];

    $conNomina = "select * from nominas where id_nomina = $nid";
    $resNomina = mysqli_query($conexion, $conNomina) or die ('no se consulto la nómina');
    $nomina = mysqli_fetch_array($resNomina);

    if(isset($_POST['boton'])) {

        /* $nid = $_POST['id_nomina']; */
        $fecha = $_POST['fecha'];
        /* $nombreTrabajador = $_POST['trabajador']; */
        $diasLaborados = $_POST['diasLaborados'];
        $salarioDiario = $_POST['salarioDiario'];
        $auxilioTrans = $_POST['auxilioTransporte'];
        $seguridadSocial = $_POST['seguridadSocial'];
        $total = $_POST['total'];

        $editar = "update nominas set fecha='$fecha', dias_laborados='$diasLaborados', salario_diario='$salarioDiario', auxilio_transporte='$auxilioTrans', seguridad_social='$seguridadSocial', Total='$total' where id_nomina = $nid";

        mysqli_query($conexion, $editar) or die ('no se edito nomina');

        /* header("Location: ../../nominas.php"); */
        echo "<script>window.location = 'nominas.php'</script>";
    }
?>

<div id="formulario">
    <form action="nominas.php?id_nomina=<?php echo $nomina['id_nomina']; ?>" method="post" class="form">
        <input type="hidden" name="id" value="<?php echo $nomina['id_nomina']; ?>">
        <table>
            <tr>
                <th>Fecha:</th>
                <td><input type="date" name="fecha" value="<?php echo $nomina['fecha']; ?>" required="required" placeholder="fecha" class="form-control"></td>
            </tr>
            <!-- <tr>
                <th>Número trabajador:</th>
                <td><input type="number" name="trabajador" value="<?php echo $nomina['nombre_trabajador']; ?>" required="required" placeholder="nombre trabajador" class="form-control"></td>
            </tr> -->
            <tr>
                <th>Dias laborados:</th>
                <td><input type="number" name="diasLaborados" value="<?php echo $nomina['dias_laborados']; ?>" required="required" placeholder="dias laborados" class="form-control"></td>
            </tr>
            <tr>
                <th>Salario diario:</th>
                <td><input type="number" name="salarioDiario" value="<?php echo $nomina['salario_diario']; ?>" required="required" placeholder="salario diario" class="form-control"></td>
            </tr>
            <tr>
                <th>Auxilio transporte:</th>
                <td><input type="number" name="auxilioTransporte" value="<?php echo $nomina['auxilio_transporte']; ?>" required="required" placeholder="auxilio de transporte" class="form-control"></td>
            </tr>
            <tr>
                <th>Seguridad social:</th>
                <td><input type="number" name="seguridadSocial" value="<?php echo $nomina['seguridad_social']; ?>" required="required" placeholder="seguridad social" class="form-control"></td>
            </tr>
            <tr>
                <th>Total:</th>
                <td><input type="number" name="total" value="<?php echo $nomina['Total']; ?>" required="required" placeholder="total" class="form-control"></td>
            </tr>
            <tr>
                <th>
                    <br><button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="window.location='nominas.php'">
                        Cancelar
                    </button><br><br>
                </th>
                <td><br><input type="submit" name="boton" value="Editar Nómina" class=btnInsertClient><br><br></td>
            </tr>
        </table>
    </form>
    <br><br>
</div>

<div class="consulta">
    <table class="tconsulta">
        <tr>
            <th>Fecha</th>
            <th>Nombre trabajador</th>
            <th>Dias laborados</th>
            <th>Salario diario</th>
            <th>Auxilio transporte</th>
            <th>Seguridad social</th>
            <th>Total</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        $consultaNomina = "select * from nominas order by fecha";
        $resultado_n = mysqli_query($conexion, $consultaNomina) or die('no se consulto la nomina');
        while ($nomina = mysqli_fetch_array($resultado_n)) {
        ?>
            <tr>
                <td><?php echo $nomina['fecha']; ?></td>
                <td>
                    <?php
                    $consulta_nombre = "select * from empleado where id_empleado = " . $nomina['nombre_trabajador'];
                    $res_nombre = mysqli_query($conexion, $consulta_nombre) or die('no se consulto nombre');
                    $nombre = mysqli_fetch_array($res_nombre);

                    echo $nombre['nombre'];
                    ?>

                </td>
                <td><?php echo $nomina['dias_laborados']; ?></td>
                <td><?php echo $nomina['salario_diario']; ?></td>
                <td><?php echo $nomina['auxilio_transporte']; ?></td>
                <td><?php echo $nomina['seguridad_social']; ?></td>
                <td><?php echo $nomina['Total']; ?></td>
                <td>
                    <img src="img/editar.png" width="50px" title="Editar" alt="Editar" style="cursor: pointer;">
                </td>
                <td>
                    <img src="img/borrar.png" width="50xp" title="Borrar" alt="Borrar" style="cursor: pointer;" onclick="eliminarNomina(<?php echo $nomina['id_nomina']; ?>)">
                </td>
            </tr>
        <?php } ?>
    </table>
</div>