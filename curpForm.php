<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	echo '<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>CURP</title>
		</head>
		<body>
			<h1>Validación de CURP</h1>
			<form action="curp.php" method="POST">
				<label>Año de nac: </label><input type="text" name="anio"/>
				<!--<label>Apellido Paterno: </label><input type="text" name="nombre"/>
				<label>Apellido Materno: </label><input type="text" name="nombre"/>
				<label>Año: </label><input type="text" name="nombre"/>
				<label>Mes: </label><input type="text" name="nombre"/>
				<label>Día: </label><input type="text" name="nombre"/>
				<label>: </label><input type="text" name="nombre"/>
				<label>Nombre: </label><input type="text" name="nombre"/>-->
				<label>Introduzca su curp</label><input type="text" name="curp"/>
				<input type="submit" value="Enviar"/>
			</form>
			<a href="principal.php">Regresar</a>
		</body>
	</html>';
}
?>