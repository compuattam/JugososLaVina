<?php 
    require_once('../../conexion.php');

    if(isset($_POST['boton'])){

        $destinofoto = "../../img/empleado";
        $destinohv = "../../documentos/empleado";

        $nombre = $_POST['nombre'];
        $documento = $_POST['documento'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $cargo = $_POST['cargo'];
        $ciudad = $_POST['municipio'];

        $foto = $_FILES['foto'];
        $nombre_foto = $foto['name'];
        $tamaño_foto = $foto['size'];
        list($nfoto, $ext) = explode(".", $nombre_foto);
        $nfoto = $documento.".".$ext;

        if($ext=="jpg" || $ext=="png" || $ext=="gif" || $ext=="jpeg") {

            if($tamaño_foto <= 5000000000) {
                move_uploaded_file($foto['tmp_name'], $destinofoto."/".$nfoto);
            }else {
                echo "<script>alert('El archivo es demasiado grande')</script>";
            }

        } else {
            echo "<script>alert('La extensión del archivo no es permitida')</script>";
        }


        $hv = $_FILES['hvida'];
        $nombre_hv = $hv['name'];
        $tamaño_hv = $hv['size'];
        list($nhvida, $exthvida) = explode(".", $nombre_hv);
        $nhvida = $documento."_".$nombre.".".$exthvida;

        if($ext=="pdf") {

            if($tamaño_foto <= 5000000000) {
                move_uploaded_file($hv['tmp_name'], $destinohv."/".$nhvida);
            }else {
                echo "<script>alert('El archivo es demasiado grande')</script>";
            }

        } else {
            echo "<script>alert('La extensión del archivo no es permitida')</script>";
        }

        $insertar = "insert into empleado(nombre, identificacion, direccion, email, celular, tipo_empleado, r_municipios, foto, hv_empleado) values('$nombre', '$documento', '$direccion', '$email', '$celular', '$cargo', $ciudad, '$nfoto', '$nhvida')";
        mysqli_query($conexion, $insertar) or die('no inserto empleado');
        header("Location: ../../Empleados.php");
    }
?>