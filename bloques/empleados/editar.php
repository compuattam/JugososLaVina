<?php


$eid = $_GET['id_empleado'];

$conempleado = "select * from empleado where id_empleado = $eid";
$resempleado = mysqli_query($conexion, $conempleado) or die('no se consulto empleado');
$empleado = mysqli_fetch_array($resempleado);

if (isset($_POST['boton'])) {
    //$eid = $_POST['id_empleado'];
    $nombre = $_POST['nombre'];
    $documento = $_POST['documento'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $cargo = $_POST['cargo'];

    $editar = "update empleado set nombre='$nombre', identificacion='$documento', direccion='$direccion', email='$email', celular='$celular', tipo_empleado='$cargo' where id_empleado=$eid";
    mysqli_query($conexion, $editar) or die('no inserto empleado');
    //header("Location: empleados.php");
    echo "<script>window.location = 'empleados.php'</script>";
}
?>

<div id="formulario">
    <form action="empleados.php?id_empleado=<?php echo $empleado['id_empleado'] ?>" method="post" class="form">
        <input type="hidden" name="id" value="<?php echo $empleado['id_empleado']; ?>">
        <table>
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="nombre" value="<?php echo $empleado['nombre'] ?>" required="required" placeholder="Nombre empleado" class="form-control"><br></td>
            </tr>
            <tr>
                <th>Identificación:</th>
                <td><input type="text" name="documento" value="<?php echo $empleado['identificacion'] ?>" required="required" placeholder="No documento" class="form-control"><br></td>
            </tr>
            <tr>
                <th>Dirección:</th>
                <td><input type="text" name="direccion" value="<?php echo $empleado['direccion'] ?>" required="required" placeholder="Dirección" class="form-control"><br></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="email" name="email" value="<?php echo $empleado['email'] ?>" required="required" placeholder="Email" class="form-control"><br></td>
            </tr>
            <tr>
                <th>Celular:</th>
                <td><input type="tel" name="celular" value="<?php echo $empleado['celular'] ?>" required="required" placeholder="Celular" class="form-control"><br></td>
            </tr>
            <tr>
                <th>Cargo:</th>
                <td><input type="text" name="cargo" value="<?php echo $empleado['tipo_empleado'] ?>" required="required" placeholder="Cargo" class="form-control"><br></td>
            </tr>
            <tr>
                <th>
                    <br><button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="window.location='empleados.php'">
                        Cancelar
                    </button><br><br>
                </th>
                <td><br><input type="submit" name="boton" value="Editar Empleado" class=btnInsertClient><br><br></td>
            </tr>
        </table>
    </form>
    <br><br>
</div>



<div class="consulta">
    <table class="tconsulta">
        <tr>
            <th>Nombre</th>
            <th>Identificación</th>
            <th>Dirección</th>
            <th>Email</th>
            <th>Celular</th>
            <th>Cargo</th>
            <th>Ciudad</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        $consulta_e = "select * from empleado order by nombre";
        $resultado_e = mysqli_query($conexion, $consulta_e) or die('no se consulto los empleados');
        while ($empleado = mysqli_fetch_array($resultado_e)) {
        ?>
            <tr>
                <td><?php echo $empleado['nombre']; ?></td>
                <td><?php echo $empleado['identificacion']; ?></td>
                <td><?php echo $empleado['direccion']; ?></td>
                <td><?php echo $empleado['email']; ?></td>
                <td><?php echo $empleado['celular']; ?></td>
                <td><?php echo $empleado['tipo_empleado']; ?></td>
                <td>
                    <?php
                    $consulta_ciudad = "select * from municipios where id_municipios = " . $empleado['r_municipios'];
                    $res_ciudad = mysqli_query($conexion, $consulta_ciudad) or die('no se consulto la ciudad');
                    $ciudad = mysqli_fetch_array($res_ciudad);

                    echo $ciudad['municipio'];
                    ?>

                </td>
                <td>
                    <img src="img/editar.png" width="50px" title="Editar" alt="Editar">
                </td>
                <td>
                    <img src="img/borrar.png" width="50xp" title="Borrar" alt="Borrar" style="cursor: pointer;" onclick="eliminarEmpleado(<?php echo $empleado['id_empleado']; ?>);">
                </td>
            </tr>
        <?php } ?>
    </table>
</div>