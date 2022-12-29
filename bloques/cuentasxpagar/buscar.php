<div id="buscar">
    <form action="cuentasporpagar.php" method="GET">
        <input type="text" name="datos" id="datos" class="form-control" style="width: 50%; border: 1px solid #000;"><br>
        <input type="submit" name="botonb" value="Buscar" class="btn btn-primary">
    </form>
</div>
<br><br>


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

        $datos = $_GET['datos'];

        $consulta_cob = "select * from cuentasxpagar where ref_factura LIKE '%$datos%' or nombre LIKE '%$datos%' or valor LIKE '%$datos%' or fecha LIKE '%$datos%'";

        $resultado_cob = mysqli_query($conexion, $consulta_cob) or die('no se consulta cuentas por pagar');
        while ($cuentasxpagar = mysqli_fetch_array($resultado_cob)) {
        ?>
            <tr>
                <td><?php echo $cuentasxpagar['ref_factura']; ?></td>
                <td><?php echo $cuentasxpagar['nombre']; ?></td>
                <td><?php echo $cuentasxpagar['valor']; ?></td>
                <td><?php echo $cuentasxpagar['fecha']; ?></td>
                <td>
                    <img src="img/editar.png" width="50px" title="Editar" alt="Editar" style="cursor: pointer;" onclick="window.location = 'cuentasporpagar.php?id_pagar=<?php echo $cuentasxpagar['id_pagar']; ?>'">
                </td>
                <td>
                    <img src="img/borrar.png" width="50px" title="Borrar" alt="Borrar" style="cursor: pointer;" onclick="eliminarCuentaxPagar(<?php echo $cuentasxpagar['id_pagar']; ?>)">
                </td>
            </tr>
        <?php } ?>
    </table>
</div>