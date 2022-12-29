<?php 
    
    $cxcid = $_GET['id_cobrar'];

    $concuentascobrar = "select * from cuentasxcobrar where id_cobrar = $cxcid";
    $rescuentascobrar = mysqli_query($conexion, $concuentascobrar) or die ('no se consulto cuentas por cobrar');
    $cuentasxcobrar = mysqli_fetch_array($rescuentascobrar);

    if (isset($_POST['boton'])) {

        $nit = $_POST['nit'];
        $razonS = $_POST['razonSocial'];
        $valorF = $_POST['valorFactura'];
        $fechaF = $_POST['fechaFactura'];

        $editar = "update cuentasxcobrar set NIT='$nit', razon_social='$razonS', valor_factura=$valorF, fecha_factura='$fechaF' where id_cobrar=$cxcid";

        mysqli_query($conexion, $editar) or die ('no se edito la cuenta por cobrar');

        echo "<script>window.location = 'cuentasporcobrar.php'</script>";
    }

?>

<div id="formulario">
    <form action="cuentasporcobrar.php?id_cobrar=<?php echo $cuentasxcobrar['id_cobrar']; ?>" method="post" class="form">
        <input type="hidden" name="id" value="<?php echo $cuentasxcobrar['id_cobrar']; ?>">
        <table>
            <tr>
                <th>Nit:</th>
                <td><input type="text" name="nit" value="<?php echo $cuentasxcobrar['NIT']; ?>" required="required" placeholder="Nit" class="form-control"></td>
            </tr>
            <tr>
                <th>Razón Social:</th>
                <td><input type="text" name="razonSocial" value="<?php echo $cuentasxcobrar['razon_social']; ?>"required="required" placeholder="razón social" class="form-control"></td>
            </tr>
            <tr>
                <th>Valor Factura:</th>
                <td><input type="number" name="valorFactura" value="<?php echo $cuentasxcobrar['valor_factura']; ?>" required="required" placeholder="valor factura" class="form-control"></td>
            </tr>
            <tr>
                <th>Fecha Factura:</th>
                <td><input type="date" name="fechaFactura" value="<?php echo $cuentasxcobrar['fecha_factura']; ?>" required="required" placeholder="fecha factura" class="form-control"></td>
            </tr>
            <tr>
                <th>
                    <br><button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="window.location='cuentasporcobrar.php'">
                    Cancelar
                    </button><br><br>
                </th>
                <td><br><input type="submit" name="boton" value="Editar cuenta por cobrar" class=btnInsertClient><br><br></td>
            </tr> 
        </table>
    </form>
    <br><br>
</div>


<div class="consulta">
    <table class="tconsulta">
        <tr>
            <th>Nit</th>
            <th>Razón Social</th>
            <th>Valor Factura</th>
            <th>Fecha Factura</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        $consultacxc = "select * from cuentasxcobrar order by razon_social";
        $resultadocxc = mysqli_query($conexion, $consultacxc) or die('no se consulto cuentas por cobrar');
        while ($cuentasxcobrar = mysqli_fetch_array($resultadocxc)) {
        ?>
            <tr>
                <td><?php echo $cuentasxcobrar['NIT']; ?></td>
                <td><?php echo $cuentasxcobrar['razon_social']; ?></td>
                <td><?php echo $cuentasxcobrar['valor_factura']; ?></td>
                <td><?php echo $cuentasxcobrar['fecha_factura']; ?></td>
                <td>
                    <img src="img/editar.png" width="50px" title="Editar" alt="Editar" style="cursor: pointer;" onclick="window.location = 'cuentasporcobrar.php?id_cobrar=<?php echo $cuentasxcobrar['id_cobrar']; ?>'">
                </td>
                <td>
                    <img src="img/borrar.png" width="50px" title="Borrar" alt="Borrar" style="cursor: pointer;" onclick="eliminarCuentaxCobrar(<?php echo $cuentasxcobrar['id_cobrar']; ?>)">
                </td>
            </tr>
        <?php } ?>
    </table>
</div>