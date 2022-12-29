<?php
require_once('../../conexion.php');

$region = $_GET['region'];

$conmunicipio = "select * from municipios where r_regiones = $region order by municipio";
$resmunicipio = mysqli_query($conexion, $conmunicipio) or die('no se consulto municipio');
while ($municipio = mysqli_fetch_array($resmunicipio)) {
?>
    <option value="<?php echo $municipio['id_municipios']; ?>" label="<?php echo $municipio['municipio']; ?>">
        <?php echo $municipio['municipio']; ?>
    </option>
<?php } ?>
<script></script>