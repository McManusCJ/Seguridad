<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	echo '<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Validación de tarjeta VISA</title>
		</head>
		<body>
			<h1>Validación de tarjeta VISA</h1>
			<form action="visa.php" method="post">
				<label>Número de tu tarjeta</label><input type="text" name="visa"/>
				<input type="submit" value="Enviar"/>
			</form>
			<a href="principal.php">Regresar</a>
		</body>
	</html>';
}
?>