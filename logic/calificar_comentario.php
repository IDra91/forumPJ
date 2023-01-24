<?php
    require 'conexion.php';
    $no_comentario = $_POST['no_comentario'];
    $no_usuario = $_POST['no_usuario'];
    $calificacion = $_POST['calificacion'];
    $q = "INSERT INTO cali_coment (no_comentario,
    no_usuario,calificacion) VALUES ($no_comentario,$no_usuario,$calificacion);";
    $anfrage($con,$q);
    if ($anfrage) {
        echo "Se ha calificado el comentario de manera correcta";
    } else {
        echo "Hubo un error inesperado en la calificación";
    }

?>