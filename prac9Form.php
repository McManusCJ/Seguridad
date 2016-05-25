<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	echo '<!DOCTYPE html>
	<html>
		<head>
			<title>Practica 9</title>
		</head>
		<body>
			<h1>Algoritmos ISBN-10 e ISBN-13</h1>
			<form action="prac9.php" method="post">
				Clave ISBN: <input type="text" name="text"/>
				<select name="isbn">
					<option value="10">ISBN-10</option>
					<option value="13">ISBN-13</option>
				</select>
				<input type="submit"/>
			</form>
			<a href="principal.php">Regresar</a>
		</body>
	</html>';
}
?>