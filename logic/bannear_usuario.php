<?php
    require 'conexion.php';
    $usuario = $_POST['usuario'];
    $rol = 5;
    $selec = "SELECT * FROM usuarios where usuario='$usuario'";
    $result = mysqli_query($con, $selec);
    $row = mysqli_fetch_assoc($result);
    $q= "UPDATE usuarios SET no_rol = $rol where $row = 1;";
    $antwort = mysqli_query($con, $q);
    if ($antwort) {
        echo "Se ha expulsado al usuario exitosamente";
    } else {
        echo "Se ha producido un error al intentar expulsar al usuario";
    }
?>