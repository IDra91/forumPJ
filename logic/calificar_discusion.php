<?php
    require 'conexion.php';
    $no_usuario = $_POST['no_usuario'];
    $puntaje = $_POST['puntaje'];
    $q = "INSERT INTO cali_discusion (no_usuario, puntaje) VALUES ($no_usuario, $puntaje);";
    $anfrage = mysqli_query($con,$q);
    if ($anfrage) {
        echo "Su calificación se ha insertado correctamente";
    }else {
        echo "Hubo un error a la hora de calificar";
    }
?>