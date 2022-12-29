<?php
    

    $cxpid = $_GET['id_pagar'];

    $concuentaspagar = "select * from cuentasxpagar where id_pagar = $cxpid";
    $rescuentaspagar = mysqli_query($conexion, $concuentaspagar) or die ('no se consulto cuentas por pagar');
    $cuentasxpagar = mysqli_fetch_array($rescuentaspagar);

    if (isset($_POST['boton'])) {

        $ref = $_POST['ref'];
        $nombre = $_POST['nombre'];
        $valor = $_POST['valor'];
        $fecha = $_POST['fecha'];

        $editar = "update cuentasxpagar set ref_factura='$ref',nombre='$nombre', valor=$valor, fecha='$fecha' where id_pagar=$cxpid";

        mysqli_query($conexion, $editar) or die ('no se edito la cuenta por pagar');

        echo "<script>window.location = 'cuentasporpagar.php'</script>";
    }
?>

<div id="formulario">
    <form action="" method="post" class="form">
        <input type="hidden" name="id" value="<?php echo $cuentasxpagar['id_pagar']; ?>">
        <table>
            <tr>
                <th>Ref. factura:</th>
                <td><input type="text" name="ref" value="<?php echo $cuentasxpagar['ref_factura']; ?>" required="required" placeholder="ref. factura" class="form-control"></td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="nombre" value="<?php echo $cuentasxpagar['nombre']; ?>" required="required" placeholder="nombre" class="form-control"></td>
            </tr>
            <tr>
                <th>Valor:</th>
                <td><input type="number" name="valor" value="<?php echo $cuentasxpagar['valor']; ?>" required="required" placeholder="valor" class="form-control"></td>
            </tr>
            <tr>
                <th>Fecha:</th>
                <td><input type="date" name="fecha" value="<?php echo $cuentasxpagar['fecha']; ?>" required="required" placeholder="fecha" class="form-control"></td>
            </tr>
            <tr>
                <th>
                    <br><button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="window.location='cuentasporpagar.php'">
                        Cancelar
                    </button><br><br>
                </th>
                <td><br><input type="submit" name="boton" value="Guardar cuenta por pagar" class="btnInsertClient"><br><br></td>
            </tr>
        </table>
        <br><br>
    </form>
    <br><br>
</div>



<div class="consulta">
    <table class="tconsulta">
        <tr>
            <th>Ref. factura</th>
            <th>Nombre</th>
            <th>Valor</th>
            <th>Fecha</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        $consulta_cob = "select * from cuentasxpagar order by nombre";
        $resultado_cob = mysqli_query($conexion, $consulta_cob) or die('no se consulta cuentas por pagar');
        while ($cuentasxpagar = mysqli_fetch_array($resultado_cob)) {
        ?>
            <tr>
                <td><?php echo $cuentasxpagar['ref_factura']; ?></td>
                <td><?php echo $cuentasxpagar['nombre']; ?></td>
                <td><?php echo $cuentasxpagar['valor']; ?></td>
                <td><?php echo $cuentasxpagar['fecha']; ?></td>
                <td>
                    <img src="img/editar.png" width="50px" title="Editar" alt="Editar" style="cursor: pointer;">
                </td>
                <td>
                    <img src="img/borrar.png" width="50px" title="Borrar" alt="Borrar" style="cursor: pointer;" onclick="eliminarCuentaxPagar(<?php echo $cuentasxpagar['id_pagar']; ?>)">
                </td>
            </tr>
        <?php } ?>
    </table>
</div>