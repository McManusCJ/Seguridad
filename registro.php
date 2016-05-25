<?php
if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['usuario']) && isset($_POST['contra']) && isset($_POST['contra2']))
{
	if($_POST['contra']==$_POST['contra2'])
	{
		$password=hash(hash_algos()[5],$_POST['contra']);	
		
		$conexion=mysqli_connect("127.0.0.1","root","","SEGURIDAD");
		
		$usuario=mysqli_real_escape_string($conexion,$_POST['usuario']);
		
		$query='SELECT * FROM USUARIOS WHERE US_USUARIO="'.$usuario.'";';
		$result=mysqli_query($conexion,$query);
		if(mysqli_num_rows($result)==0)	//si el usuario no existe
		{
			$nombre=mysqli_real_escape_string($conexion,$_POST['nombre']);
			$apellido=mysqli_real_escape_string($conexion,$_POST['apellido']);
			
			$query='INSERT INTO USUARIOS (US_NOMBRE,US_APELLIDO,US_USUARIO,US_CONTRA)
			VALUES ("'.$nombre.'","'.$apellido.'","'.$usuario.'","'.$password.'");';
			
			if(mysqli_query($conexion,$query)===true)
				echo 'Registro concluido con éxito
					<a href="inicio.html">Volver al Inicio</a>"';
			else
			{
				echo 'Hubo un error <br/><br/><a href="inicio.html">Volver al Inicio</a><br/><br/>';
				$error=mysqli_error($conexion);
				var_dump($error);
			}
		}
		else
			echo 'Ese nombre de usuario ya existe<a href="registro.html">Volver</a>';
		mysqli_close($conexion);
	}
	else
		echo 'Tu contraseña no coincide con la verificación<a href="registro.html">Volver</a>';
}
else
	echo 'Completa los datos<br/>
	<a href="registro.html">Volver</a>';
?>