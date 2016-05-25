<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	if(isset($_POST['dato']))
	{
		$cad=$_POST['dato'];
		if(!isset($_POST['accion']))		//cifra
		{
			$rev=strrev($cad);
			$pedazoF=substr($rev,6);
			$pedazoI=substr($rev,0,6);
			$res=$pedazoF.$pedazoI;
		}
		else
		{
			$pedazoF=substr($cad,0,3);
			$pedazoI=substr($cad,3);
			$pre=$pedazoI.$pedazoF;
			$res=strrev($pre);
		}
		echo $res.'<br/><a href="prac3Form.php">Volver</a>';
	}
	else
		echo 'No introdujiste un número de cuenta válido<br/><a href="prac3Form.php">Volver</a>';
}
?>