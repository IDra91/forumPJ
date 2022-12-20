<?php 
    require 'conexion.php';
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $q = "INSERT INTO categoria (nombre, descripcion) VALUES ('$nombre', '$descripcion');";
    $anfrage = mysqli_query($con,$q);
    if(anfrage){
        echo "Se ha agregado una nueva categoría";
    } else{
        echo "Hubo un error en la creación";
    }
?>