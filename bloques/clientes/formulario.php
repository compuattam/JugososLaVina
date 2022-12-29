<button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="abrirformulario('abrir')">Insertar nuevo cliente</button>
<br><br><br> 
<div id="formulario" style="display: none;">
    <form action="bloques/clientes/insertar.php" method="post" class="form" enctype="multipart/form-data">
        <table>                                                                                                                                                                                                                                    
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="nombre" required="required" placeholder="Nombre cliente" class="form-cotrol"></td>
            </tr>
            <tr>
                <th>Documento:</th>
                <td><input type="text" name="documento" required="required" placeholder="Documento" class="form-cotrol"></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="email" name="email" required="required" placeholder="Email" class="form-cotrol"></td>
            </tr>
            <tr>
                <th>Teléfono:</th>
                <td><input type="tel" name="telefono" required="required" placeholder="Teléfono"  class="form-cotrol"></td>
            </tr>
            <tr>
                <th>Dirección:</th>
                <td><input type="text" name="direccion" required="required" placeholder="Dirección"  class="form-cotrol"></td>
            </tr>
            <!-- <tr>
                <th>Fecha de nacimiento:</th>
                <td><input type="date" name="fechan" required="required" placeholder="Fecha de nacimiento"  class="form-cotrol"></td>
            </tr> -->
            <tr>
                <th>Region:</th>
                <td>
                    <select name="region" id="region" onchange="MostrarMunicipio('bloques/clientes/conmunicipio.php?region=' + document.getElementById('region').value); document.getElementById('vermunicipio').style.display = 'block'; return false;">
                        <?php 
                            $conregion = "select * from regiones order by region";
                            $resregion = mysqli_query($conexion, $conregion) or die ('no se consulto las regiones');
                            while($region=mysqli_fetch_array($resregion)){
                        ?>
                        <option value="<?php echo $region['id_regiones']; ?>" label="<?php echo $region['region'] ?>">
                            <?php echo $region['region']; ?>
                        </option>
                            <?php } ?>
                    </select> 
                </td>
            </tr>
            <tr id="vermunicipio" style="display:none;">
                <th>Municipio:</th>
                <td>
                    <select name="municipio" id="municipio">
                        
                    </select>
                </td>
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
                <td><br><input type="submit" name="boton" value="Guardar Cliente" class=btnInsertClient><br><br></td>
            </tr>  
        </table>
    </form>
    
</div>