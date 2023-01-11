<?php
//Va configurando las URLS de manera dinámica con la variable view y colocándolo en base a ello en el main
    if(isset($_GET['view'])){
        $views=explode("/",$_GET['view']);
        include 'views/'.$views[0].'-view.php';
    } else{
        include 'views/inicio-view.php';
    }

?>