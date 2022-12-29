<?php

$iid = $_GET['id_producto'];

$conproducto = "select * from producto where id_producto = $iid";
$resproducto = mysqli_query($conexion, $conproducto) or die('no se consulto producto');
$producto = mysqli_fetch_array($resproducto);

if (isset($_POST['boton'])) {

    /* $iid = $_POST['id_producto']; */
    $nombre = $_POST['nombre'];
    $caracteristicas = $_POST['caracteristicas'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $editar = "update producto set nombre='$nombre', caracteristicas='$caracteristicas', precio='$precio', cantidad='$cantidad' where id_producto = $iid";

    mysqli_query($conexion, $editar) or die('no inserto producto');

    /* header("Location: inventario.php"); */
    echo "<script>window.location = 'inventario.php'</script>";
}

?>

<div id="formulario">
    <form action="inventario.php?id_producto=<?php echo $producto['id_producto'] ?>" method="post" class="form">
        <input type="hidden" name="id" value="<?php echo $producto['id_producto'] ?>">
        <table>
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>" required="required" placeholder="Nombre producto" class="form-control"></td>
            </tr>
            <tr>
                <th>Caracteristicas:</th>
                <td><input type="text" name="caracteristicas" value="<?php echo $producto['caracteristicas']; ?>" required="required" placeholder="caracteristicas" class="form-control"></td>
            </tr>
            <tr>
                <th>Precio:</th>
                <td><input type="number" name="precio" value="<?php echo $producto['precio']; ?>" required="required" placeholder="precio" class="form-control"></td>
            </tr>
            <tr>
                <th>Cantidad:</th>
                <td><input type="number" name="cantidad" value="<?php echo $producto['cantidad'] ?>" required="required" placeholder="cantidad" class="form-control"></td>
            </tr>
            <tr>
                <th>
                    <br><button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="abrirformulario('cerrar')" onclick="window.location='inventario.php'">
                        Cancelar
                    </button><br><br>
                </th>
                <td><br><input type="submit" name="boton" value="Editar Producto" class=btnInsertClient><br><br></td>
            </tr>
        </table>
    </form>
    <br><br>
</div>

<div class="consulta">
    <table class="tconsulta">
        <tr>
            <th>Nombre</th>
            <th>Caracteristicas</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        $consulta_p = "select * from producto order by nombre";
        $resultado_p = mysqli_query($conexion, $consulta_p) or die('no se consulto producto');
        while ($producto = mysqli_fetch_array($resultado_p)) {
        ?>
            <tr>
                <td><?php echo $producto['nombre']; ?></td>
                <td><?php echo $producto['caracteristicas']; ?></td>
                <td><?php echo $producto['precio']; ?></td>
                <td><?php echo $producto['cantidad']; ?></td>
                <td>
                    <img src="img/editar.png" width="50px" title="Editar" alt="Editar" style="cursor: pointer;">
                </td>
                <td>
                    <img src="img/borrar.png" width="50xp" title="Borrar" alt="Borrar" style="cursor: pointer;" onclick="eliminarProducto(<?php echo $producto['id_producto']; ?>)">
                </td>
            <?php } ?>
            </tr>
    </table>
</div>