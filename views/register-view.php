<form class="content" name="content" action="<?php echo SERVERURL; ?>logic/rgstr.php" method="POST">
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