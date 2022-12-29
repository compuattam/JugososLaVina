<button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="abrirformulario('abrir')">Insertar nuevo usuario</button>
<br><br><br>
<div id="formulario" style="display:none;">
    <form action="bloques/usuarios/insertar.php" method="post" class="form">
        <table>
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="nombre" required="required" placeholder="Nombre" class="form-control"></td>
            </tr>
            <tr>
                <th>Usuario:</th>
                <td><input type="text" name="user" required="required" placeholder="Usuario" class="form-control"></td>
            </tr>
            <tr>
                <th>Identificación:</th>
                <td><input type="text" name="id" required="required" placeholder="Identificación" class="form-control"></td>
            </tr>
            <tr>
                <th>Celular:</th>
                <td><input type="text" name="celular" required="required" placeholder="Celular" class="form-control"></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="text" name="email" required="required" placeholder="Email" class="form-control"></td>
            </tr>
            <tr>
                <th>Contraseña:</th>
                <td>
                    <input type="password" name="password" id="contrasenna" required="required" placeholder="Password" >
                    <img src="img/view.png" alt="" onmouseover="mostrarPassword()" onmouseout="ocultarPassword()">
                </td>
            </tr>
            <tr>
                <th>Rol:</th>
                <td><input type="text" name="rol" required="required" placeholder="Rol" class="form-control"></td>
            </tr>
            <tr>
                <th>Activo:</th>
                <td>Si:<input type="radio" name="activo" value="Si">
                No:<input type="radio" name="activo" value="No"></td>
            </tr>
            <tr>
                <th>
                    <br><button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="abrirformulario('cerrar')">
                        Cancelar
                    </button><br><br>
                </th>
                <td><br><input type="submit" name="boton" value="Guardar Usuario" class="btnInsertClient"><br><br></td>
            </tr>
        </table>
    </form>
</div>