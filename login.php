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
	<div class="form">
    <a class="form__btn1" href="login.php">Iniciar Sesión</a>
    <a class="form__btn2" href="register.pho">Registrarse</a>  
	</div>
    <form class="login-frm" action="logic/inicio.php" method="POST">
		<b4 class="login__lbl1">Username:</b4>
		<input type="text" class="usuario" name="usuario">		
		<p4 class="login__lbl2">Password:</p4>
		<input type="password" class="password" name="password">
		<button type="sumbit" class="form_button">Bestätigen</button>
</form>

</body>
</html>