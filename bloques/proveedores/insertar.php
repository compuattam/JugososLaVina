<?php 
require_once('../../conexion.php');

if(isset($_POST['boton'])) {
    
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $dpto = $_POST['dpto'];
    $municipio = $_POST['municipio'];

    $insertar = "insert into proveedores(nombre,direccion,telefono,email,r_municipio,r_departamento) 
    values ('$nombre','$direccion','$telefono','$email',$dpto,$municipio)";

    mysqli_query($conexion, $insertar) or die ('no inserto proveedor');

    header("Location: ../../proveedores.php");
}
?>