<?php 
    require 'conexion.php';
    require 'suche_kategorien.php';
    $suchen = "SELECT * from discusion where no_categoria=$row";
    $q = mysqli_query($con, $suchen);
    include_once 'views/forum-view.php';
