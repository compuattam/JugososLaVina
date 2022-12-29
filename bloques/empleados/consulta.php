<div id="buscar">
  <form action="empleados.php" method="GET">
    <input type="text" name="datos" id="datos" class="form-control" style="width: 50%; border: 1px solid #000;"><br>
    <input type="submit" name="botonb" value="Buscar" class="btn btn-primary">
  </form>
</div>
<br><br>


<div class="consulta">
  <table class="tconsulta">
    <tr>
      <th>Nombre</th>
      <th>Identificación</th>
      <th>Dirección</th>
      <th>Email</th>
      <th>Celular</th>
      <th>Cargo</th>
      <th>Ciudad</th>
      <th></th>
      <th></th>
    </tr>
    <?php
    $consulta_e = "select * from empleado order by nombre";
    $resultado_e = mysqli_query($conexion, $consulta_e) or die('no se consulto los empleados');
    while ($empleado = mysqli_fetch_array($resultado_e)) {
    ?>
      <tr>
        <td><?php echo $empleado['nombre']; ?></td>
        <td><?php echo $empleado['identificacion']; ?></td>
        <td><?php echo $empleado['direccion']; ?></td>
        <td><?php echo $empleado['email']; ?></td>
        <td><?php echo $empleado['celular']; ?></td>
        <td><?php echo $empleado['tipo_empleado']; ?></td>
        <td>
          <?php
          $consulta_ciudad = "select * from municipios where id_municipios = " . $empleado['r_municipios'];
          $res_ciudad = mysqli_query($conexion, $consulta_ciudad) or die('no se consulto la ciudad');
          $ciudad = mysqli_fetch_array($res_ciudad);

          echo $ciudad['municipio'];
          ?>

        </td>
        <td>
          <img src="img/editar.png" width="50px" title="Editar" alt="Editar" style="cursor: pointer;" onclick="window.location = 'empleados.php?id_empleado=<?php echo $empleado['id_empleado']; ?>'">
        </td>
        <td>
          <img src="img/borrar.png" width="50xp" title="Borrar" alt="Borrar" style="cursor: pointer;" onclick="eliminarEmpleado(<?php echo $empleado['id_empleado']; ?>);">
        </td>
      </tr>
    <?php } ?>
  </table>
</div>