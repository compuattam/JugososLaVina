<button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="abrirformulario('abrir')">Insertar nuevo proveedor</button>
<br><br><br>
<div id="formulario" style="display:none;">
    <form action="bloques/proveedores/insertar.php" method="post" class="form">
        <table>
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="nombre" required="required" placeholder="Nombre proveedor" class="form-control"></td>
            </tr>
            <tr>
                <th>Dirección:</th>
                <td><input type="text" name="direccion" required="required" placeholder="Dirección" class="form-control"></td>
            </tr>
            <tr>
                <th>Teléfono:</th>
                <td><input type="tel" name="telefono" required="required" placeholder="Teléfono" class="form-control"></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="email" name="email" required="required" placeholder="email" class="form-control"></td>
            </tr>
            <tr>
                <th>Departamento:</th>
                <td>
                    <select name="dpto" id="dpto" onchange="MostrarMunicipio('bloques/proveedores/conmunicipio.php?dpto=' + document.getElementById('dpto').value); document.getElementById('verciudad').style.display='block'; return false;">
                        <?php
                        $condpto = "select * from departamentos_colombia order by nombre_departamento";
                        $resdpto = mysqli_query($conexion, $condpto) or die('no se consulto el departamento');
                        while ($dpto = mysqli_fetch_array($resdpto)) {
                        ?>
                            <option value="<?php echo $dpto['id_departamentos']; ?>" label="<?php echo $dpto['nombre_departamento']; ?>">
                                <?php echo $dpto['nombre_departamento']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr id="verciudad" style="display:none;">
                <th>Municipio:</th>
                <td>
                    <select name="municipio" id="municipio">


                    </select>
                </td>
            </tr>
            <tr>
                <th>
                    <br><button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="abrirformulario('cerrar')">
                        Cancelar
                    </button><br><br>
                </th>
                <td><br><input type="submit" name="boton" value="Guardar Proveedor" class="btnInsertClient"><br><br></td>
            </tr>
        </table>
    </form>
</div>