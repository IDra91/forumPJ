<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forum Projekt</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Forum Projekt</h1>
	<div class="log-form" name="log-form">
    	<a class="log-btn1" href="login.php">Iniciar Sesión</a>
		<a class="log-btn1" href="register.php">Registrarse</a>
	</div>
    <form class="content" name="content" action="logic/inicio.php" method="POST">
		<b4 class="content__lbl1">Username:</b4>
		<input type="text" class="usuario" name="usuario">		
		<p4 class="content__lbl2">Password:</p4>
		<input type="password" class="password" name="password">
		<button type="submit" class="content_button">Bestätigen</button>
</form>

</body>
</html>