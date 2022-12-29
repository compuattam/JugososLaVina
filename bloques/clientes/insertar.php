<?php
    require_once('../../conexion.php');

    if(isset($_POST['boton'])) {

        $destinofoto = "../../img/cliente";

        $nombre = $_POST['nombre'];
        $documento = $_POST['documento'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $municipio = $_POST['municipio'];
        $region = $_POST['region'];

        $foto = $_FILES['foto'];
        $nombre_foto = $foto['name'];
        $tamaño_foto = $foto['size'];
        list($nfoto, $ext) = explode(".", $nombre_foto);
        $nfoto = $nombre.".".$ext;

        if($ext=="jpg" || $ext=="png" || $ext=="gif" || $ext=="jpeg") {

            if($tamaño_foto <= 5000000000) {
                move_uploaded_file($foto['tmp_name'], $destinofoto."/".$nfoto);
            }else {
                echo "<script>alert('El archivo es demasiado grande')</script>";
            }

        } else {
            echo "<script>alert('La extensión del archivo no es permitida')</script>";
        }

        $insertar = "insert into clientes(nombre, documento, email, telefono, direccion, municipio, region, foto) values ('$nombre', '$documento', '$email', '$telefono', '$direccion', $municipio, $region,'$nfoto')";

        mysqli_query($conexion, $insertar) or die ('no inserto cliente');

        header("Location: ../../clientes.php");
    }
?>
