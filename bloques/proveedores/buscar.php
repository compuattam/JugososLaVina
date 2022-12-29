<div id="buscar">
    <form action="proveedores.php" method="GET">
        <input type="text" name="datos" id="datos" class="form-control" style="width: 50%; border: 1px solid #000;"><br>
        <input type="submit" name="botonb" value="Buscar" class="btn btn-primary">
    </form>
</div>
<br><br>


<div class="consulta">
    <table class="tconsulta">
        <tr>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Municipio</th>
            <th></th>
            <th></th>
        </tr>
        <?php

        $datos = $_GET['datos'];

        $consulta_p = "select * from proveedores where nombre LIKE '%$datos%' or direccion LIKE '%$datos%' or telefono LIKE '%$datos%' or email LIKE '%$datos%'";

        $resultado_p = mysqli_query($conexion, $consulta_p) or die('no se consulto los proveedores');
        while ($proveedor = mysqli_fetch_array($resultado_p)) {
        ?>
            <tr>
                <td><?php echo $proveedor['nombre']; ?></td>
                <td><?php echo $proveedor['direccion']; ?></td>
                <td><?php echo $proveedor['telefono']; ?></td>
                <td><?php echo $proveedor['email']; ?></td>
                <td>
                    <?php
                    $consulta_municipio = "select * from municipios_colombia where id_municipios = " . $proveedor['r_municipio'];
                    $res_municipio = mysqli_query($conexion, $consulta_municipio) or die('no se consulto municipio');
                    $municipio = mysqli_fetch_array($res_municipio);

                    $consulta_departamento = "select * from departamentos_colombia where id_departamentos = " . $proveedor['r_departamento'];
                    $res_departamento = mysqli_query($conexion, $consulta_departamento) or die('no se consulto departamento');
                    $departamento = mysqli_fetch_array($res_departamento);

                    echo $municipio['nombre_municipio'] . " - " . $departamento['nombre_departamento'];
                    ?>
                </td>
                <td>
                    <img src="img/editar.png" width="50px" title="Editar" alt="Editar" style="cursor: pointer;" onclick="window.location = 'proveedores.php?id_proveedor=<?php echo $proveedor['id_proveedor']; ?>'">
                </td>
                <td>
                    <img src="img/borrar.png" width="50px" title="Borrar" alt="Borrar" style="cursor: pointer;" onclick="eliminarProveedor(<?php echo $proveedor['id_proveedor']; ?>)">
                </td>
            </tr>
        <?php } ?>
    </table>
</div>