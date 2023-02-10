<?php 
    require 'conexion.php';
    require 'suche_kategorien.php';
    $suchen = "SELECT * from discusion where no_categoria= $valor";
    $q = mysqli_query($con, $suchen);
?>