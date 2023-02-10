<?php
    require 'conexion.php';
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $selec = "SELECT * FROM usuarios where usuario='$usuario'";
    $result = mysqli_query($con, $selec);
    $row = mysqli_fetch_assoc($result);
    $q= "UPDATE usuarios SET usuario = '$usuario', password = '$password', nombre = '$nombre', apellido = '$apellido', correo = '$correo' where $row = 1; ";
    $antwort = mysqli_query($con, $q);
    if ($antwort) {
        echo "Se ha modificado el perfil exitosamente";
    } else {
        echo "Se ha producido un error al intentar modificar el perfil";
    }
?>