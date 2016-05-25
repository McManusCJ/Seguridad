<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	echo '<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Pracica 6</title>
		</head>
		<body>
			<h1>Cifrado asimétrico</h1>
			<form action="prac6.php" method="post">
				Mensaje: <input type="text" name="dato"/><br/>
				Llave: <input type="text" name="llave"/><br/>
				Descifrar: <input type="checkbox" value="si" name="accion"/><br/>
				<input type="submit"/>
			</form>
			<a href="principal.php">Regresar</a>
		</body>
	</html>';
}
?>