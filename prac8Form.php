<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	echo '<!DOCTYPE html>
	<html>
		<head>
			<title>Practica 8</title>
		</head>
		<body>
			<h1>Hash lose-lose. Suma recursiva de bytes</h1>
			<form action="prac8.php" method="post">
				Texto: <input type="text" name="text"/>
				<input type="submit"/>
			</form>
			<a href="principal.php">Regresar</a>
		</body>
	</html>';
}
?>