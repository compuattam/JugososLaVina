<div id="buscar">
  <form action="clientes.php" method="GET">
    <input type="text" name="datos" id="datos" class="form-control" style="width: 50%; border: 1px solid #000;"><br>
    <input type="submit" name="botonb" value="Buscar" class="btn btn-primary">
  </form>
</div>
<br><br>

<div class="consulta">
  <table class="tconsulta">
    <tr>
      <th>Nombre</th>
      <th>Documento</th>
      <th>Email</th>
      <th>Teléfono</th>
      <th>Dirección</th>
      <th>Municipio</th>
      <th></th>
      <th></th>
    </tr>
    <?php
    $consulta_c = "select * from clientes order by nombre";
    $resultado_c = mysqli_query($conexion, $consulta_c) or die('no se consulto los clientes');
    while ($cliente = mysqli_fetch_array($resultado_c)) {
    ?>
      <tr>
        <td><?php echo $cliente['nombre']; ?></td>
        <td><?php echo $cliente['documento']; ?></td>
        <td><?php echo $cliente['email']; ?></td>
        <td><?php echo $cliente['telefono']; ?></td>
        <td><?php echo $cliente['direccion']; ?></td>
        <td>
          <?php
          $consulta_municipio = "select * from municipios where id_municipios = " . $cliente['municipio'];
          $res_municipio = mysqli_query($conexion, $consulta_municipio) or die('no consulto municipio');
          $municipio = mysqli_fetch_array($res_municipio);

          $consulta_region = "select * from regiones where id_regiones = " . $cliente['region'];
          $res_region = mysqli_query($conexion, $consulta_region) or die('no consulto la region');
          $region = mysqli_fetch_array($res_region);

          echo $municipio['municipio'] . " - " . $region['region'];
          ?>
        </td>
        <td>
          <img src="img/editar.png" width="50px" title="Editar" alt="Editar" style="cursor: pointer;" onclick="window.location = 'clientes.php?id_clientes=<?php echo $cliente['id_clientes']; ?>'">
        </td>
        <td>
          <img src="img/borrar.png" width="50px" title="Borrar" alt="Borrar" style="cursor: pointer;" onclick="eliminarCliente(<?php echo $cliente['id_clientes']; ?>)">
        </td>
      </tr>
    <?php } ?>
  </table>
</div>