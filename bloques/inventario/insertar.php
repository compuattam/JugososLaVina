<?php 
    require_once('../../conexion.php');

    if(isset($_POST['boton'])) {
        
        $destinofoto = "../../img/producto";

        $nombre = $_POST['nombre'];
        $caracteristicas = $_POST['caracteristicas'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];

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

        $insertar = "insert into producto(nombre,caracteristicas,precio,cantidad,foto) values('$nombre','$caracteristicas',$precio,$cantidad,'$nfoto')";

        mysqli_query($conexion, $insertar) or die ('no inserto producto');

        header("Location: ../../inventario.php");
        
    }
?>