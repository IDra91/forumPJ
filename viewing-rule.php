<?php
    $componente = parse_url($_SERVER["REQUEST_URI"]);
    $ruta = $componente['path'];
    $partes = explode("/", $ruta);
 
    if ($partes[2] == "") {
        include_once 'views/session-view.php';
    } elseif ($partes[2] == 'forum') {
        include_once 'views/forum-view.php';
    } elseif ($partes[2] == 'profile') {
        include_once 'views/profile-view.php';
    } elseif ($partes[2] == 'topic') {
        include_once 'views/topic-view.php';
    } elseif ($partes[2] == 'chat'){
        include_once 'views/chat-view.php';
    } elseif (($partes[2] == "") && ($usuario == "")) {
        include_once 'views/inicio-view.php';
    } else {
        include_once 'views/error-view.php';
    }
?>