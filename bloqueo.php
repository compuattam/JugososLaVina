<?php 
    session_start();
    $usuario = $_SESSION['usuario'];

    $consulta = "select * from usuario where id_usuario = '$usuario'";
    $resultado = mysqli_query($conexion, $consulta) or die ('No se consulto el usuario');
    $userr = mysqli_fetch_array($resultado);

    if($userr['id_usuario'] != ""){
        $dato = "entro";
    }else {
        header("Location: index.php");
    }
?>