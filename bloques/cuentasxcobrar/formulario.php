<button type="button" class="btnInsertClient" onclick="abrirformulario('abrir')">Insertar nueva Cuenta por Cobrar</button>
<br><br>
<div id="formulario" style="display: none;">
    <form action="bloques/cuentasxcobrar/insertar.php" method="post" class="form">
        <table>
            <tr>
                <th>Nit:</th>
                <td><input type="text" name="nit" required="required" placeholder="Nit" class="form-control"></td>
            </tr>
            <tr>
                <th>Razón Social:</th>
                <td><input type="text" name="razonSocial" required="required" placeholder="razón social" class="form-control"></td>
            </tr>
            <tr>
                <th>Valor Factura:</th>
                <td><input type="number" name="valorFactura" required="required" placeholder="valor factura" class="form-control"></td>
            </tr>
            <tr>
                <th>Fecha Factura:</th>
                <td><input type="date" name="fechaFactura" required="required" placeholder="fecha factura" class="form-control"></td>
            </tr>
            <tr>
                <th>
                    <br><button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="abrirformulario('cerrar')">
                    Cancelar
                    </button><br><br>
                </th>
                <td><br><input type="submit" name="boton" value="Guardar cuenta por cobrar" class=btnInsertClient><br><br></td>
            </tr> 
        </table>
    </form>
</div>