<button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="abrirformulario('abrir')">Insertar Nueva nómina</button>
<br><br>
<div id="formulario" style="display:none">
    <form action="bloques/nominas/insertar.php" method="post" class="form">
        <table>
            <tr>
                <th>Fecha:</th>
                <td><input type="date" name="fecha" required="required" placeholder="fecha" class="form-control"></td>
            </tr>
            <tr>
                <th>Nombre trabajador:</th>
                <td>
                    <select name="n_empleado" id="n_empleado">
                        <?php
                        $conempleado = "select * from empleado order by nombre";
                        $resempleado = mysqli_query($conexion, $conempleado) or die('no se consulto el empleado');
                        while ($empleado = mysqli_fetch_array($resempleado)) {
                        ?>
                            <option value="<?php echo $empleado['id_empleado']; ?>" label="<?php echo $empleado['nombre'] ?>">
                                <?php echo $empleado['nombre']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </td>
                </td>
            </tr>
            <tr>
                <th>Dias laborados:</th>
                <td><input type="number" name="diasLaborados" required="required" placeholder="dias laborados" class="form-control"></td>
            </tr>
            <tr>
                <th>Salario diario:</th>
                <td><input type="number" name="salarioDiario" required="required" placeholder="salario diario" class="form-control"></td>
            </tr>
            <tr>
                <th>Auxilio transporte:</th>
                <td><input type="number" name="auxilioTransporte" required="required" placeholder="auxilio de transporte" class="form-control"></td>
            </tr>
            <tr>
                <th>Seguridad social:</th>
                <td><input type="number" name="seguridadSocial" required="required" placeholder="seguridad social" class="form-control"></td>
            </tr>
            <tr>
                <th>Total:</th>
                <td><input type="number" name="total" required="required" placeholder="total" class="form-control"></td>
            </tr>
            <tr>
                <th>
                    <br><button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="abrirformulario('cerrar')">
                        Cancelar
                    </button><br><br>
                </th>
                <td><br><input type="submit" name="boton" value="Guardar Nómina" class=btnInsertClient><br><br></td>
            </tr>
        </table>
    </form>
</div>