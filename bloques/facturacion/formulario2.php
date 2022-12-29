<form action="insertar.php?control=2" method="POST" style="display: none;" id="formventa">
    <input type="hidden" name="productos" value='<?php echo $productos; ?>'>
    <input type="hidden" name="cantidades" value='<?php echo $cantidades; ?>'>
    <input type="hidden" name="valores unidad" value='<?php echo $valores_unidad; ?>'>
    <input type="hidden" name="subtotales" value='<?php echo $subtotales; ?>'>


    <div class="row">
        <div class="col-lg-3"><b>Fecha:</b></div>
        <div class="col-lg-3">
            <?php 
                date_default_timezone_set('America/Bogota');
                echo date('Y-m-d')
            ?>
            <input type="hidden" name="fecha" value="<?php echo date('Y-m-d'); ?>">
        </div>
        <div class="col-lg-3">Cliente:</div>
        <div class="col-lg-3">
            <select name="cliente" class="form-control class-select">
                <?php
                    $conclient = "select * from clientes order by nombre";
                    $resclient = mysqli_query($conexion, $conclient) or die ('no se consulto cliente');
                    while($cliente = mysqli_fetch_array($resclient)) {
                ?>
                <option value="<?php echo $cliente['id_clientes']; ?>" label="<?php echo $cliente['nombre']; ?>"><?php echo $cliente['nombre']; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3"><b>Metodo de pago:</b></div>
        <div class="col-lg-3">
            <select name="mpago">
                <option value="Efectivo" label="Efectivo">Efectivo</option>
                <option value="Tarjeta" label="Tarjeta">Tarjeta</option>
            </select>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-3">
            <br><input type="submit" name="boton2" value="Guardar Venta" class="btnInsertClient">
        </div>
    </div>
</form>

