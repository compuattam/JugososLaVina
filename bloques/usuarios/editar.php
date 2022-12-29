<?php

$userid = $_GET['id_usuario'];

$conuser = "select * from usuario where id_usuario = $userid";
$resuser = mysqli_query($conexion, $conuser) or die('no se consulto usuario');
$usuario = mysqli_fetch_array($resuser);

if (isset($_POST['boton'])) {

    $nombre = $_POST['nombre'];
    $user = $_POST['user'];
    $id = $_POST['id'];
    $cel = $_POST['celular'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $rol = $_POST['rol'];
    $act = $_POST['activo'];


    $editar = "update usuario set nombre='$nombre', user='$user', identificacion='$id', celular='$cel', email='$email', contrasena=sha1('$pass'), rol='$rol', activo='$act' where id_usuario = $userid";

    mysqli_query($conexion, $editar) or die('no se edito usuario');

    echo "<script>window.location='usuarios.php'</script>";
}
?>

<div id="formulario">
    <form action="" method="post" class="form">
        <input type="hidden" name="id" value="<?php echo $usuario['id_usuario']; ?>">
        <table>
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>" required="required" placeholder="Nombre" class="form-control"></td>
            </tr>
            <tr>
                <th>Usuario:</th>
                <td><input type="text" name="user" value="<?php echo $usuario['user']; ?>" required="required" placeholder="Usuario" class="form-control"></td>
            </tr>
            <tr>
                <th>Identificación:</th>
                <td><input type="text" name="id" value="<?php echo $usuario['identificacion']; ?>" required="required" placeholder="Identificación" class="form-control"></td>
            </tr>
            <tr>
                <th>Celular:</th>
                <td><input type="text" name="celular" value="<?php echo $usuario['celular']; ?>" required="required" placeholder="Celular" class="form-control"></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="text" name="email" value="<?php echo $usuario['email']; ?>" required="required" placeholder="Email" class="form-control"></td>
            </tr>
            <tr>
                <th>Contraseña:</th>
                <td>
                    <input type="password" name="password" id="contrasenna" required="required" placeholder="Password">
                    <img src="img/view.png" alt="" onmouseover="mostrarPassword()" onmouseout="ocultarPassword()">
                </td>
            </tr>
            <tr>
                <th>Rol:</th>
                <td><input type="text" name="rol" value="<?php echo $usuario['rol']; ?>" required="required" placeholder="Rol" class="form-control"></td>
            </tr>
            <tr>
                <th>Activo:</th>
                <td>Si:<input type="radio" name="activo" value="Si" required="required">
                    No:<input type="radio" name="activo" value="No" required="required"></td>
            </tr>
            <tr>
                <th>
                    <br><button name="botoninsertar" value="insertar" type="button" class="btnInsertClient" onclick="window.location='usuarios.php'">
                        Cancelar
                    </button><br><br>
                </th>
                <td><br><input type="submit" name="boton" value="Editar Usuario" class="btnInsertClient"><br><br></td>
            </tr>
        </table>
    </form>
    <br><br>
</div>


<div class="consulta">
    <table class="tconsulta">
        <tr>
            <th>Nombre</th>
            <th>User</th>
            <th>Identificación</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Activo</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        $con_user = "select * from usuario order by nombre";
        $res_user = mysqli_query($conexion, $con_user) or die('no se consulto usuarios');
        while ($usuario = mysqli_fetch_array($res_user)) {
        ?>
            <tr>
                <td><?php echo $usuario['nombre']; ?></td>
                <td><?php echo $usuario['user']; ?></td>
                <td><?php echo $usuario['identificacion']; ?></td>
                <td><?php echo $usuario['celular']; ?></td>
                <td><?php echo $usuario['email']; ?></td>
                <td><?php echo $usuario['rol']; ?></td>
                <td><?php echo $usuario['activo']; ?></td>
                <td><img src="img/editar.png" width="50px" title="Editar" alt="Editar" style="cursor: pointer;"></td>
                <td><img src="img/borrar.png" width="50px" title="Borrar" alt="Borrar" style="cursor: pointer;" onclick="eliminarUsuario(<?php echo $usuario['id_usuario']; ?>)"></td>
            </tr>
        <?php } ?>
    </table>
</div>

