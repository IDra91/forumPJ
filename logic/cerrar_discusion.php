<?php
    require 'conexion.php';
    $titulo = $_POST['titulo'];
    $estado = "cerrado";
    $selec = "SELECT * FROM discusion where titulo='$titulo'";
    $result = mysqli_query($con, $selec);
    $row = mysqli_fetch_assoc($result);
    $q= "UPDATE discusion SET estado = '$estado' where $row = 1;";
    $antwort = mysqli_query($con, $q);
    if ($antwort) {
        echo "Se ha cerrado la discusión exitosamente";
    } else {
        echo "Se ha producido un error al intentar cerrar el tema";
    }
?>