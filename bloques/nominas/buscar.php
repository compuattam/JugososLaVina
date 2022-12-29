<div id="buscar">
    <form action="nominas.php" method="GET">
        <input type="text" name="datos" id="datos" class="form-control" style="width: 50%; border: 1px solid #000;"><br>
        <input type="submit" name="botonb" value="Buscar" class="btn btn-primary">
    </form>
</div>
<br><br>


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

        $datos = $_GET['datos'];

        $consultaNomina = "select * from nominas where fecha LIKE '%$datos%' or nombre_trabajador LIKE '%$datos%' or dias_laborados LIKE '%$datos%' or salario_diario LIKE '%$datos%' or auxilio_transporte LIKE '%$datos%' or seguridad_social LIKE '%$datos%' or Total LIKE '%$datos%'";  

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
                    <img src="img/editar.png" width="50px" title="Editar" alt="Editar" style="cursor: pointer;" onclick="window.location ='nominas.php?id_nomina=<?php echo $nomina['id_nomina']; ?>'">
                </td>
                <td>
                    <img src="img/borrar.png" width="50xp" title="Borrar" alt="Borrar" style="cursor: pointer;" onclick="eliminarNomina(<?php echo $nomina['id_nomina']; ?>)">
                </td>
            </tr>
        <?php } ?>
    </table>
</div>