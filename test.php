<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lernen PHP</title>
</head>
<body>
    <?php
        session_start();
        $usuario = $_SESSION['usuario'];

        echo "<h1>Hallo $usuario :3</h1>"
    ?>
	

</body>
</html>