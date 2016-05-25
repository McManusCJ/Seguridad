<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	echo '<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Pracica 3</title>
		</head>
		<body>
			<h1>Cifrado simple de un número de cuenta</h1>
			<form action="prac3.php" method="post">
				Número de cuenta: <input type="text" maxlength="9" name="dato"/><br/>
				Descifrar: <input type="checkbox" value="si" name="accion"/><br/>
				<input type="submit"/>
			</form>
			<a href="principal.php">Regresar</a>
		</body>
	</html>';
}
?>