<?php
    require 'conexion.php';
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $precio = $_POST['precio'];
    $selec = "SELECT * FROM discusion where titulo='$titulo'";
    $result = mysqli_query($con, $selec);
    $row = mysqli_fetch_assoc($result);
    $q = "UPDATE discusion SET titulo='$titulo', texto='$texto', precio=$precio where $row = 1;";
    $antwort = mysqli_query($con, $q);
    if ($antwort) {
        echo "Se ha modificado el tema exitosamente";
    } else {
        echo "Se ha producido un error al modificar el tema";
    }
?> 
