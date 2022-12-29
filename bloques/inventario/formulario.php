<button name="botoninsertar" value="Insertar" type="button" class="btnInsertClient" onclick="abrirformulario('abrir')">Insertar nuevo producto</button>
<br><br>
<div id="formulario" style="display:none">
    <form action="bloques/inventario/insertar.php" method="post" class="form" enctype="multipart/form-data">
        <table>
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="nombre" required="required" placeholder="Nombre producto" class="form-control"></td>
            </tr>
            <tr>
                <th>Caracteristicas:</th>
                <td><input type="text" name="caracteristicas" required="required" placeholder="caracteristicas" class="form-control"></td>
            </tr>
            <tr>
                <th>Precio:</th>
                <td><input type="number" name="precio" required="required" placeholder="precio" class="form-control"></td>
            </tr>
            <tr>
                <th>Cantidad:</th>
                <td><input type="number" name="cantidad" required="required" placeholder="cantidad" class="form-control"></td>
            </tr>
            <tr>
                <th>Foto:</th>
                <td><input type="file" name="foto" class="form-control"></td>
            </tr>
            <tr>
                <th>
                    <br><button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="abrirformulario('cerrar')">
                        Cancelar
                    </button><br><br>
                </th>
                <td><br><input type="submit" name="boton" value="Guardar Producto" class=btnInsertClient><br><br></td>
            </tr>
        </table>
    </form>
</div>