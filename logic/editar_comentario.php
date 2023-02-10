<?php
    require 'conexion.php';
    $no_comentario = $_POST['no_comentario'];
    $mensaje = $_POST['mensaje'];
    $selec = "SELECT * FROM comentarios where no_comentario='$no_comentario'";
    $result = mysqli_query($con, $selec);
    $row = mysqli_fetch_assoc($result);
    $q = "UPDATE comentarios SET mensaje='$mensaje' where $row = 1;";
    $antwort = mysqli_query($con, $q);
    if ($antwort) {
        echo "Se ha modificado el mensaje exitosamente";
    } else {
        echo "Se ha producido un error al modificar el tema";
    }
?>