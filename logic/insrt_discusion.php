<?php
    require 'conexion.php';
    require '../config/config.php';
    $no_categoria = $_POST['no_categoria'];
    $no_usuario = $_POST['no_usuario'];
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $precio = $_POST['precio'];
    $estado = "abierto";
    $q = "INSERT INTO discusion (no_categoria, no_usuario, titulo, texto, precio, estado) VALUES ($no_categoria, $no_usuario, '$titulo', '$texto', $precio, '$estado');";
    $anfrage = mysqli_query($con, $q);
    if ($anfrage) {
        echo "Se ha publicado nueva discusión";
        header("location: ../index.php");
    } else {
        echo "Se ha producido un error";
        header("location: ../index.php");
    }
?>