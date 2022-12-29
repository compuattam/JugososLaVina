<?php 
    require_once('../../conexion.php');

    if(isset($_POST['boton'])) {

        $nombre = $_POST['nombre'];
        $user = $_POST['user'];
        $id = $_POST['id'];
        $cel = $_POST['celular'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $rol = $_POST['rol'];
        $act = $_POST['activo'];

        $insertar = "insert into usuario(nombre,user,identificacion,celular,email,contrasena,rol,activo) values ('$nombre','$user','$id','$cel','$email', sha1('$pass'),'$rol', '$act')";

        mysqli_query($conexion, $insertar) or die ('no se inserto usuario');

        header("Location: ../../usuarios.php");
    }
?>
