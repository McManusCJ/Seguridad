<?php
session_name("usser");
session_start();
if(!isset($_SESSION['nombre']))
{
	if(isset($_POST['usser']) && isset($_POST['password']))
	{
		$conexion=mysqli_connect("127.0.0.1","root","","SEGURIDAD");
		
		$usuario=mysqli_real_escape_string($conexion,$_POST['usser']);
		$password=mysqli_real_escape_string($conexion,$_POST['password']);
		$query='SELECT * FROM USUARIOS WHERE US_USUARIO="'.$usuario.'";';
		$result=mysqli_query($conexion,$query);
		
		if(mysqli_num_rows($result)==0)
			echo 'Ese usuario no existe<br/>
			<a href="inicio.html">Volver</a>"';
		else
		{
			$resultArray=mysqli_fetch_assoc($result);
			$password=hash(hash_algos()[5],$_POST['password']);			//implementar hash
			$pswrdDB=$resultArray['US_CONTRA'];
			if($password==$pswrdDB)
			{
				//session_name('usser');
				//session_start();
				//$_SESSION['dentro']=true;
				$_SESSION['nombre']=$resultArray['US_NOMBRE'].' '.$resultArray['US_APELLIDO'] ;
			}
			else
				echo 'Contraseña incorrecta<br/>
				<a href="inicio.html">Volver</a>';
		}
	}
	else
		echo 'Completa tus datos<br/>
		<a href="inicio.html">Volver a Inicio</a>';
}

if(isset($_SESSION['nombre']))
{
	echo'<h1>Bienvenido '.$_SESSION['nombre'].'</h1>
		<section>
			<a href="curpForm.php">CURP</a><br/>
			<a href="visaForm.php">VISA</a><br/>
			<a href="prac1.php">Práctica 1<small></small></a><br/>
			<a href="prac2Form.php">Práctica 2 <small>Cifrado Playfair-n</small></a><br/>
			<a href="prac3Form.php">Práctica 3 <small>Cifrado simple de un número de cuenta de la UNAM</small></a><br/>
			<!--<a href="prac4Form.php" disabled>Práctica 4</a><br/>-->
			<a href="prac5Form.php">Práctica 5 <small>Cifrado simétrico a una cadena a partir de una llave dada</small></a><br/>
			<a href="prac6Form.php">Práctica 6 <small>Cifrado asimétrico</small></a><br/>
			<a href="prac7Form.php">Práctica 7 <small>Implementación de un hash propio</small></a><br/>
			<a href="prac8Form.php">Práctica 8 <small>Implementación del hash lose lose</small></a><br/>
			<a href="prac9Form.php">Práctica 9 <small>Algoritmos ISBN-10 y ISBN-13</small></a><br/>
		</section><br/><br/>
		<a href="cerrar.php">Cerrar sesión</a>';
}
?>