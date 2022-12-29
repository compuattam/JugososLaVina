<div class="consulta">
    <table class="tconsulta">
        <tr>
            <th>Id. Factura</th>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Productos</th>
            <th>Total a pagar</th>
            <th>Metodo de pago:</th>
            <!-- <th></th>
            <th></th> -->
        </tr>
        <?php
        $consulta_fac = "select * from facturacion order by fecha";
        $resultado_fac = mysqli_query($conexion, $consulta_fac) or die('no se consulto facturación y reportes');
        while ($facturacion = mysqli_fetch_array($resultado_fac)) {
        ?>
            <tr>
                <td><?php echo $facturacion['id_facturacion']; ?></td>
                <td><?php echo $facturacion['fecha']; ?></td>
                <td>
                    <?php 
                        $conclient = "select * from clientes where id_clientes = ". $facturacion['cliente'];
                        $resclient = mysqli_query($conexion, $conclient) or die ('no se consulto cliente');
                        $cliente = mysqli_fetch_array($resclient);

                        echo $cliente['nombre'];
                    ?>
                </td>
                <td>
                    <?php
                    $productos = unserialize($facturacion['productos']);
                    $cantidad = unserialize($facturacion['cantidad']);
                    $valor_unidad = unserialize($facturacion['valor_unidad']);
                    $subtotal = unserialize($facturacion['subtotal']);

                    $largo = count($productos);
                    for ($cont = 0; $cont < $largo; $cont++) {
                    ?>

                        <div class="row">
                            <div class="col-lg-4">
                                <?php
                                $conpro = "select * from producto where id_producto = " . $productos[$cont];
                                $respro = mysqli_query($conexion, $conpro) or die('no se consulto producto');
                                $pro = mysqli_fetch_array($respro);

                                echo  $pro['nombre'];
                                ?>
                            </div>
                            <div class="col-lg-4">Cantidad: <?php echo $cantidad[$cont]; ?></div>
                            <div class="col-lg-4">Valor Unidad: <?php echo $valor_unidad[$cont]; ?></div>
                            <div class="col-lg-4">Subtotal: <?php echo $subtotal[$cont]; ?></div>
                        </div>
                    <?php } ?>
                </td>
                <td><?php echo $facturacion['total']; ?></td>
                <td><?php echo $facturacion['metodo_pago']; ?></td>
                
                <!-- <td>
                    <img src="img/editar.png" width="50px" title="Editar" alt="Editar" style="cursor: pointer;" onclick="window.location = 'facturacionyreportes.php?id_facturacion=<?php echo $facturacion['id_facturacion']; ?>'">
                </td> -->
                <!-- <td>
                    <img src="img/borrar.png" width="50px" title="Borrar" alt="Borrar" style="cursor: pointer;" onclick="eliminarFacturacionReportes( -->
                   
               <!--  </td> -->
            </tr>
        <?php } ?>
    </table>
</div>