<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	echo '<!DOCTYPE html>
	<html>
		<head>
			<title>Practica 7</title>
		</head>
		<body>
			<h1>Hash propio</h1>
			<form action="prac7.php" method="post">
				Texto: <input type="text" name="text"/>
				<input type="submit"/>
			</form>
			<a href="principal.php">Regresar</a>
		</body>
	</html>';
}
?>