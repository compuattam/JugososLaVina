<div class="table-responsive">
    <table class="table align-middle">
        <tr>
            <th>Productos</th>
            <th>Cantidad</th>
            <th>Valor Unitario</th>
            <th>Subtotal</th>
            <th></th>
        </tr>
        <?php
        $largo = count($_SESSION['productos']);

        if ($largo > 0) {
            for ($con = 0; $con < $largo; $con++) {
        ?>
                <tr>
                    <td>
                        <?php
                        $conpro3 = "select * from producto where id_producto = " . $_SESSION['productos'][$con];
                        $respro3 = mysqli_query($conexion, $conpro3) or die('no se consulto producto');
                        $pro3 = mysqli_fetch_array($respro3);

                        echo  $pro3['nombre'];
                        ?>
                    </td>
                    <td><?php echo $_SESSION['cantidades'][$con]; ?></td>
                    <td>$ <?php echo $_SESSION['valores unidad'][$con]; ?>.00</td>
                    <td>$ <?php echo $_SESSION['subtotales'][$con]; ?>.00</td>
                    <td>
                        <button class="btn btn-danger" id="boton">X</button>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
        <tr>
            <td colspan="2"></td>
            <th>Total</th>
            <td><b>
                    $ <?php echo $_SESSION['total']; ?>.00
                </b></td>
            <td></td>
        </tr>
    </table>
</div>