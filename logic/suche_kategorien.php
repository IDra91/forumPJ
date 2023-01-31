<?php
    require 'conexion.php';
    $nombre = $_GET['nombre'];
    $valor = 0;
    $selec = "SELECT no_categoria from categoria where nombre='$nombre'";
    $result = mysqli_query($con, $selec);
    $row = mysqli_num_rows($result);
    if ($row) {
        $valor = $result;
        header("location: anzeig_diskussionen.php");
    } else {
        header("location: ../index.php");
    }
?>