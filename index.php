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
			<div class="navbar-header" name="navbar-header">
				<a class="navbar-btn2" href="<?php echo SERVERURL; ?>inicio/">Inicio</a>
				<a class="navbar-btn1" href="<?php echo SERVERURL; ?>login/">Iniciar Sesión</a>
				<a class="navbar-btn1" href="<?php echo SERVERURL; ?>register/">Registrarse</a>
			</div>	
		</div>	
</nav>
	<div class="contenido" id="contenido">
	<?php
		//Va configurando las URLS de manera dinámica con la variable view y colocándolo en base a ello en el main
    		if(isset($_GET['view'])){
        		$views=explode("/",$_GET['view']);
				if(is_file('views/'.$views[0].'-view.php')){
					include 'views/'.$views[0].'-view.php';
				}else{
					include 'views/inicio-view.php';
				}        		
    		} else{
        		include 'views/inicio-view.php';
    		}

	?>
	</div>

</body>
</html>