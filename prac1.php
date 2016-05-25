<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	$saludo=array("Hola","salut","Hallo!","Hello","Ni hao");
	$x=rand(0,4);
	echo $saludo[$x].'<br/><a href="principal.php">Regresar</a>';
}
?>