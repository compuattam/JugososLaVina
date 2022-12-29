<button name="botoninsertar" value="Insertar" type="button" class="btnInsertClient" onclick="abrirformulario('abrir')">Insertar nueva cuenta por pagar</button>
<br><br>
<div id="formulario" style="display:none">
    <form action="bloques/cuentasxpagar/insertar.php" method="post" class="form">
        <table>
            <tr>
                <th>Ref. factura:</th>
                <td><input type="text" name="ref" required="required" placeholder="ref. factura" class="form-control"></td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="nombre" required="required" placeholder="nombre" class="form-control"></td>
            </tr>
            <tr>
                <th>Valor:</th>
                <td><input type="number" name="valor" required="required" placeholder="valor" class="form-control"></td>
            </tr>
            <tr>
                <th>Fecha:</th>
                <td><input type="date" name="fecha" required="required" placeholder="fecha" class="form-control"></td>
            </tr>
            <tr>
                <th>
                    <br><button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="abrirformulario('cerrar')">
                        Cancelar
                    </button><br><br><br>
                </th>
                <br><td><input type="submit" name="boton" value="Guardar cuenta por pagar" class="btnInsertClient"><br><br></td>
            </tr>
        </table>
    </form>
</div>