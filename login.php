<?php 
    session_start();
    require_once('conexion.php');

    if(isset($_POST['boton'])){

        $usuario = $_POST['usuario'];
        $clave = sha1($_POST['clave']);

        $consulta = "select * from usuario where user = '$usuario' AND contrasena = '$clave'";
        $resultado = mysqli_query($conexion, $consulta) or die ('No se consulto el usuario');
        $userr = mysqli_fetch_array($resultado);

        //print_r($userr);

        if($userr['id_usuario'] != "" && $userr['activo'] == "Si") {
            echo $_SESSION['usuario'] = $userr['id_usuario'];
            header("Location: clientes.php");
        }else{
            header("Location: index.php");
        }


    }else{
        header("Location: index.php");
    }

?>

