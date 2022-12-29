<h4>Ingresar productos</h4>

<form method="POST" action="insertar.php?control=1">
    <div class="row">
        
        <div class="col-lg-12">
            <select name="producto" class="form-control form-select">
                <?php
                $conpro2 = "select * from producto order by nombre";
                $respro2 = mysqli_query($conexion, $conpro2) or die('no se consulto producto 2');
                while ($pro2 = mysqli_fetch_array($respro2)) {
                ?>
                    <option value="<?php echo $pro2['id_producto']; ?>" label="<?php echo $pro2['nombre']; ?>"><?php echo $pro2['nombre']; ?></option>
                <?php } ?>
            </select>
            <br>
            <input type="number" class="form-control" name="cantidad" required="required" placeholder="cantidad" min="1" value="1">
            <br>
            <input type="submit" class="btnInsertClient" name="boton" value="Enviar">
        </div>
    
    </div>
</form>