<?php


$cid = $_GET['id_clientes'];

$concliente = "select * from clientes where id_clientes = $cid";
$rescliente = mysqli_query($conexion, $concliente) or die('no se consulto cliente');
$cliente = mysqli_fetch_array($rescliente);

if (isset($_POST['boton'])) {

    //$cid = $_POST['id_clientes'];
    $nombre = $_POST['nombre'];
    $documento = $_POST['documento'];
    $email = $_POST['email'];     
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $editar = "update clientes set nombre='$nombre', documento='$documento', email='$email', telefono='$telefono', direccion='$direccion' where id_clientes=$cid";

    mysqli_query($conexion, $editar) or die('no se edito el cliente');

    /* header("Location: clientes.php"); */
    echo "<script>window.location = 'clientes.php'</script>";
}
?>
<div id="formulario">
    <form action="clientes.php?id_clientes=<?php echo $cliente['id_clientes']; ?>" method="post" class="form">
        <input type="hidden" name="id" value="<?php echo $cliente['id_clientes']; ?>">
        <table>
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="nombre" value="<?php echo $cliente['nombre']; ?>" required="required" placeholder="Nombre empleado" class="form-cotrol"></td>
            </tr>
            <tr>
                <th>Documento:</th>
                <td><input type="text" name="documento" value="<?php echo $cliente['documento']; ?>" required="required" placeholder="Documento" class="form-cotrol"></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="email" name="email" value="<?php echo $cliente['email']; ?>" required="required" placeholder="Email" class="form-cotrol"></td>
            </tr>
            <tr>
                <th>Teléfono:</th>
                <td><input type="text" name="telefono" value="<?php echo $cliente['telefono']; ?>" required="required" placeholder="Teléfono" class="form-cotrol"></td>
            </tr>
            <tr>
                <th>Dirección:</th>
                <td><input type="text" name="direccion" value="<?php echo $cliente['direccion']; ?>" required="required" placeholder="Dirección" class="form-cotrol"></td>
            </tr>
            <tr>
                <th>
                    <br><button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="window.location='clientes.php'">
                        Cancelar
                    </button><br><br>
                </th>
                <td><br><input type="submit" name="boton" value="Editar Cliente" class=btnInsertClient><br><br></td>
            </tr>
        </table>
    </form>
    <br><br>
</div>



<div class="consulta">
    <table class="tconsulta">
        <tr>
            <th>Nombre</th>
            <th>Documento</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Municipio</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        $consulta_c = "select * from clientes order by nombre";
        $resultado_c = mysqli_query($conexion, $consulta_c) or die('no se consulto los clientes');
        while ($cliente = mysqli_fetch_array($resultado_c)) {
        ?>
            <tr>
                <td><?php echo $cliente['nombre']; ?></td>
                <td><?php echo $cliente['documento']; ?></td>
                <td><?php echo $cliente['email']; ?></td>
                <td><?php echo $cliente['telefono']; ?></td>
                <td><?php echo $cliente['direccion']; ?></td>
                <td>
                    <?php
                    $consulta_municipio = "select * from municipios where id_municipios = " . $cliente['municipio'];
                    $res_municipio = mysqli_query($conexion, $consulta_municipio) or die('no consulto municipio');
                    $municipio = mysqli_fetch_array($res_municipio);

                    $consulta_region = "select * from regiones where id_regiones = " . $cliente['region'];
                    $res_region = mysqli_query($conexion, $consulta_region) or die('no consulto la region');
                    $region = mysqli_fetch_array($res_region);

                    echo $municipio['municipio'] . " - " . $region['region'];
                    ?>
                </td>
                <td>
                    <img src="img/editar.png" width="50px" title="Editar" alt="Editar">
                </td>
                <td>
                    <img src="img/borrar.png" width="50px" title="Borrar" style="cursor: pointer;" onclick="eliminarCliente(<?php echo $cliente['id_clientes']; ?>)" alt="Borrar">
                </td>
            </tr>
        <?php } ?>
    </table>
</div>