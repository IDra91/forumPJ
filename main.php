<?php 
    include "config/config.php";
?>
<!DOCTYPE html>
<html>
<head>
<?php
    header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
    header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forum Projekt</title>
	<link rel="stylesheet" type="text/css" href="<?php echo SERVERURL; ?>style.css">
</head>
<body>
    <?php
        session_start();
        $usuario = $_SESSION['usuario'];
    ?>
	<h1>Forum Projekt</h1>
	<div class="log-form" name="log-form">
        <?php
        echo "<b4>Willkommen '$usuario'</b4>"  
        ?>
	</div>
    <form class="content" name="content" action="" method="POST">
		
</form>

</body>
</html>