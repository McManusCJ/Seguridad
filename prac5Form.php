<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	echo '<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Práctica 5</title>
		</head>
		<body>
			<h1>Cifrado simétrico</h1>
			<form action="prac5.php" method="post">
				Mensaje: <input type="text" name="dato"/><br/>
				Llave: <input type="text" name="llave"/>Deben ser puros dígitos o puras mayúsculas<br/>
				Descifrar: <input type="checkbox" value="si" name="accion"/><br/>
				<input type="submit"/>
			</form>
			<a href="principal.php">Regresar</a>
		</body>
	</html>';
}
?>