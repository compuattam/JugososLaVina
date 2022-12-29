<div id="buscar">
  <form action="usuarios.php" method="GET">
    <input type="text" name="datos" id="datos" class="form-control" style="width: 50%; border: 1px solid #000;"><br>
    <input type="submit" name="botonb" value="Buscar" class="btn btn-primary">
  </form>
</div>
<br><br>


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
        <td>
          <img src="img/editar.png" width="50px" title="Editar" alt="Editar" style="cursor: pointer;" onclick="window.location = 'usuarios.php?id_usuario=<?php echo $usuario['id_usuario']; ?>'">
        </td>
        <td>
          <img src="img/borrar.png" width="50px" title="Borrar" alt="Borrar" style="cursor: pointer;" onclick="eliminarUsuario(<?php echo $usuario['id_usuario']; ?>)">
        </td>
      </tr>
    <?php } ?>
  </table>
</div>