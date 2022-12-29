<button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="abrirformulario('abrir')">
    Insertar nuevo empleado
</button>
<br><br><br>
<div id="formulario" style="display:none;">
    <form action="bloques/empleados/insertar.php" method="post" class="form" enctype="multipart/form-data">
        <table>
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="nombre" required="required" placeholder="Nombre empleado" class="form-control"><br></td>
            </tr>
            <tr>
                <th>Identificación:</th>
                <td><input type="text" name="documento" required="required" placeholder="No documento" class="form-control"><br></td>
            </tr>
            <tr>
                <th>Dirección:</th>
                <td><input type="text" name="direccion" required="required" placeholder="Dirección" class="form-control"><br></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="email" name="email" required="required" placeholder="Email" class="form-control"><br></td>
            </tr>
            <tr>
                <th>Celular:</th>
                <td><input type="tel" name="celular" required="required" placeholder="Celular" class="form-control"><br></td>
            </tr>
            <tr>
                <th>Cargo:</th>
                <td><input type="text" name="cargo" required="required" placeholder="Cargo" class="form-control"><br></td>
            </tr>
            <tr>
                <th>Ciudad:</th>
                <td>
                    <select name="municipio">
                    <?php 
                        $consmunicipio = "select * from municipios order by municipio";
                        $resmunicipio = mysqli_query($conexion, $consmunicipio) or die ('no se consulto municipio');
                        while($municipio=mysqli_fetch_array($resmunicipio)){
                    ?>
                        <option value="<?php echo $municipio['id_municipios']; ?>" label="<?php echo $municipio['municipio']; ?>">
                            <?php echo $municipio['municipio']; ?>
                        </option>
                    <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Foto:</th>
                <td><input type="file" name="foto" class="form-control"></td>
            </tr>
            <tr>
                <th>Hoja de vida:</th>
                <td><input type="file" name="hvida" class="form-control"></td>
            </tr>
            <tr>
                <th>
                    <br><button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="abrirformulario('cerrar')">
                    Cancelar
                    </button><br><br>
                </th>
                <td><br><input type="submit" name="boton" value="Guardar Empleado" class=btnInsertClient><br><br></td>
            </tr>
        </table>
    </form>

</div>