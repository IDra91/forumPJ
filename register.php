<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forum Projekt</title>
	<link rel="stylesheet" type="text/css" href="styles/style1.0.css">
	<link rel="stylesheet" type="text/css" href="styles/formularios.css">
</head>
<body>
	<h1>Forum Projekt</h1>
	<div class="form">
    <a class="form__btn1" href="login.php">Iniciar Sesión</a>
    <a class="form__btn2" href="register.php">Registrarse</a>  
	</div>
    <form class="content" name="content" action="logic/rgstr.php" method="POST">
		<b4 class="login__lbl1">Usuario:</b4>
		<input type="text" class="usuario" name="usuario">		
		<p4 class="login__lbl2">Contraseña:</p4>
		<input type="password" class="password" name="password">
		<b4 class="login__lbl3">Nombre:</b4>
		<input type="text" class="nombre" name="nombre">		
		<p4 class="login__lbl4">Apellido:</p4>
		<input type="text" class="apellido" name="apellido">
		<b4 class="login__lbl5">Correo:</b4>
		<input type="text" class="correo" name="correo">		
		<button type="sumbit" class="login__button">Registrarse</button>
</form>

</body>
</html>