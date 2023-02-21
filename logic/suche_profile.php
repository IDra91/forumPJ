<?php 
    require 'conexion.php';
    $componentes = parse_url($_SERVER["REQUEST_URI"]);
    $ruta = $componentes['path'];
    $partes = explode("/", $ruta);
    $parametro = $partes[3];
    $selec = "SELECT usuario from usuarios where nombre='$parametro'";
    $result = mysqli_query($con, $selec);
    $row = mysqli_num_rows($result);

    if ($usuario != $parametro) {
        
        include_once 'logic/profil-anzeigen.php';
    } else {
        include_once 'views/edit-profile-view.php';
    }
