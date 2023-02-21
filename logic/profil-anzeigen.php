<?php
    require 'conexion.php';
    require 'suche_profile.php';
    $suchen = "SELECT * from usuarios where usuario='$parametro'";
    $q = mysqli_query($con, $suchen);
    include_once 'views/anzeig-profile.php';
