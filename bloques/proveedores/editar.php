<?php


$pid = $_GET['id_proveedor'];

$conproveedor = "select * from proveedores where id_proveedor = $pid";
$resproveedor = mysqli_query($conexion, $conproveedor) or die('no se consulto el proveedor');
$proveedor = mysqli_fetch_array($resproveedor);

if (isset($_POST['boton'])) {

    /* $pid = $_POST['id_proveedor']; */
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $editar = "update proveedores set nombre='$nombre', direccion='$direccion', telefono='$telefono', email='$email' where id_proveedor = $pid";

    mysqli_query($conexion, $editar) or die('no se edito proveedor');

    echo "<script>window.location='proveedores.php'</script>";
}
?>

<div id="formulario">
    <form action="proveedores.php?id_proveedor=<?php echo $proveedor['id_proveedor']; ?>" method="post" class="form">
        <input type="hidden" name="id" value="<?php echo $proveedor['id_proveedor']; ?>">
        <table>
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="nombre" value="<?php echo $proveedor['nombre']; ?>" required="required" placeholder="Nombre proveedor" class="form-control"></td>
            </tr>
            <tr>
                <th>Dirección:</th>
                <td><input type="text" name="direccion" value="<?php echo $proveedor['direccion']; ?>" required="required" placeholder="Dirección" class="form-control"></td>
            </tr>
            <tr>
                <th>Teléfono:</th>
                <td><input type="tel" name="telefono" value="<?php echo $proveedor['telefono']; ?>" required="required" placeholder="Teléfono" class="form-control"></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="email" name="email" value="<?php echo $proveedor['email']; ?>" required="required" placeholder="email" class="form-control"></td>
            </tr>
            <tr>
                <th>
                    <br><button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="window.location='proveedores.php'">
                        Cancelar
                    </button><br><br>
                </th>
                <td><br><input type="submit" name="boton" value="Editar Proveedor" class=btnInsertClient><br><br></td>
            </tr>
        </table>
    </form>
    <br><br>
</div>


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
        $consulta_p = "select * from proveedores order by nombre";
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
                    <img src="img/editar.png" width="50px" title="Editar" alt="Editar" style="cursor: pointer;">
                </td>
                <td>
                    <img src="img/borrar.png" width="50px" title="Borrar" alt="Borrar" style="cursor: pointer;" onclick="eliminarProveedor(<?php echo $proveedor['id_proveedor']; ?>)">
                </td>
            </tr>
        <?php } ?>
    </table>
</div>