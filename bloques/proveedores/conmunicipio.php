<?php
require_once('../../conexion.php');

$dpto = $_GET['dpto'];

$conmunicipio = "select * from municipios_colombia where r_departamento = $dpto order by nombre_municipio";
$resmunicipio = mysqli_query($conexion, $conmunicipio) or die('no se consulto el municipio');
while ($municipio = mysqli_fetch_array($resmunicipio)) {
?>
    <option value="<?php echo $municipio['id_municipios']; ?>" label="<?php echo $municipio['nombre_municipio']; ?>">
        <?php echo $municipio['nombre_municipio']; ?>   
    </option>
<?php
}
?>

