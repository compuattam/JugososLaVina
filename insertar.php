<!doctype html>
<html lang="es">
<?php require_once('conexion.php'); ?>
<?php require_once('bloqueo.php'); ?>

<?php
$control = $_GET['control'];

switch ($control) {
    case 0:
        $_SESSION['productos'] = array();
        $_SESSION['cantidades'] = array();
        $_SESSION['valores unidad'] = array();
        $_SESSION['subtotales'] = array();
        $_SESSION['total'] = 0;
        break;
    case 1:
        array_push($_SESSION['productos'], $_POST['producto']);
        array_push($_SESSION['cantidades'], $_POST['cantidad']);

        $conpro = "select * from producto where id_producto = " . $_POST['producto'];
        $respro = mysqli_query($conexion, $conpro) or die('no consulto producto');
        $pro = mysqli_fetch_array($respro);

        array_push($_SESSION['valores unidad'], $pro['precio']);

        $subtotal = $_POST['cantidad'] * $pro['precio'];
        array_push($_SESSION['subtotales'], $subtotal);

        $_SESSION['total'] = array_sum($_SESSION['subtotales']);

        $productos = serialize($_SESSION['productos']);
        $cantidades = serialize($_SESSION['cantidades']);
        $valores_unidad = serialize($_SESSION['valores unidad']);
        $subtotales = serialize($_SESSION['subtotales']);
        break;
    case 2:
        if(isset($_POST['boton2'])) {
            $producto = $_POST['productos'];
            $cantidad = $_POST['cantidades'];
            $valor_unidad = $_POST['valores_unidad'];
            $subtotal = $_POST['subtotales'];
            $fecha = $_POST['fecha'];
            $cliente = $_POST['cliente'];
            $mpago = $_POST['mpago'];
    
            $insertar = "insert into facturacion(fecha, cliente, productos, cantidad, valor_unidad, subtotal, total, metodo_pago) values('$fecha',$cliente,'$producto','$cantidad','$valor_unidad','$subtotal',".$_SESSION['total'].",'$mpago')";

            mysqli_query($conexion, $insertar) or die ('no se inserto venta');
    
            header("Location: facturacionyreportes.php");
        }
        break;
}
?>

<?php require_once('partes/head.php'); ?>

<body>
    <?php require_once('partes/header.php'); ?>

    <div class="container-fluid">
        <div class="row">
            <?php require_once('partes/nav.php'); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Facturación y Reportes</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <!--<div class="btn-group me-2">
            
          </div>-->
                        <div aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Facturación y Reportes</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                    <?php require_once('bloques/facturacion/formulario.php'); ?>
                    </div>
                    <div class="col-lg-8">
                    <?php require_once('bloques/facturacion/verproductos.php'); ?>
                    </div>
                </div>
                
                <br><br>
                <hr>
                <button class="btn btn-primary" id="continuar" onclick="verformularioventa()">Continuar Venta</button>

                <?php require_once('bloques/facturacion/formulario2.php'); ?>
                
            </main>
        </div>
    </div>
</body>
<script>
    function verformularioventa() {
        document.getElementById('formventa').style.display = "block";
        document.getElementById('continuar').style.display = "none";
    }
</script>
<?php require_once('partes/script2.php'); ?>
<script src="js/ajax.js"></script>
<script src="js/funciones.js"></script>

</html>