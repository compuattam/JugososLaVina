<div id="buscar">
    <form action="cuentasporcobrar.php" method="GET">
        <input type="text" name="datos" id="datos" class="form-control" style="width: 50%; border: 1px solid #000;"><br>
        <input type="submit" name="botonb" value="Buscar" class="btn btn-primary">
    </form>
</div>
<br><br>


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

        $datos = $_GET['datos'];

        $consultacxc = "select * from cuentasxcobrar where NIT LIKE '%$datos%' or razon_social LIKE '%$datos%' or valor_factura LIKE '%$datos%' or fecha_factura LIKE '%$datos%'";

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