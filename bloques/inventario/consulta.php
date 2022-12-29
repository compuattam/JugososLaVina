<div id="buscar">
  <form action="inventario.php" method="GET">
    <input type="text" name="datos" id="datos" class="form-control" style="width: 50%; border: 1px solid #000;"><br>
    <input type="submit" name="botonb" value="Buscar" class="btn btn-primary">
  </form>
</div>
<br><br>


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
                    <img src="img/editar.png" width="50px" title="Editar" alt="Editar" style="cursor: pointer;" onclick="window.location = 'inventario.php?id_producto=<?php echo $producto['id_producto']; ?>'">
                </td>
                <td>
                    <img src="img/borrar.png" width="50xp" title="Borrar" alt="Borrar" style="cursor: pointer;" onclick="eliminarProducto(<?php echo $producto['id_producto']; ?>)">
                </td>
            </tr>
        <?php } ?>
    </table>
</div>