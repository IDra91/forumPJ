<?php
    require 'conexion.php';
    $componentes = parse_url($_SERVER["REQUEST_URI"]);
    $ruta = $componentes['path'];
    $partes = explode("/", $ruta);
    $parametro = $partes[3];
    $selec = "SELECT no_categoria from categoria where nombre='$parametro'";
    $result = mysqli_query($con, $selec);
    $row = mysqli_num_rows($result);

    if ($row) {
        $valor = $result;
        include_once 'logic/anzeig_diskussionen.php';
    } else {
        include_once 'views/error-view.php';
    }
    



    
    
    