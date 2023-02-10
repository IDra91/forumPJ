<?php 
    include "config/config.php";
		session_start();
        $usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forum Projekt</title>
	<link rel="stylesheet" type="text/css" href="<?php echo SERVERURL; ?>css/style.css">
</head>
<body>
	<h1>Forum Projekt</h1>
	<nav class="navbar-default" name="navbar-default">
		<div class="container-fluid" name="container-fluid">
			<?php
				if ($usuario != "") {
					include "views/header-log-view.php";
			?> <a class="nav-link-profile" id="nav-link-profile" href="<?php echo SERVERPROF.$usuario; ?>"><?php echo $usuario?></a>
				&nbsp;
				<a class="nav-index" id="nav-index" href="<?php echo SERVERURL; ?>">Inicio</a>
				&nbsp;
				<a class="nav-link-profile" id="nav-link-profile" href="<?php echo SERVERURL; ?>chat/">Chat</a>
				<?php  } else {
					include "views/header-unlog-view.php";
					?><a class="nav-index" id="nav-index" href="<?php echo SERVERURL; ?>">Inicio</a><?php
				}
			?>
		</div>
	</nav>
	<div class="contenido" id="contenido">
	<?php
		//Va configurando las URLS de manera dinámica con la variable view y colocándolo en base a ello en el main
    	include 'viewing-rule.php';
		
	?>
	</div>
	<div class="footer">
		<adress>
				IDra91<br>manuel.contactos91@protonmail.com
			</adress>
	</div>
</body>
</html>