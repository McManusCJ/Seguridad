<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	/*la llave sólo puede ser una cadena de dígitos o una cadena de mayúsculas*/
	if(isset($_POST['dato']) && isset($_POST['llave']))
	{
		$cad=$_POST['dato'];
		$key=$_POST['llave'];

		if(!isset($_POST['accion']))		//cifrar
		{
			if(is_numeric($key))
			{-
				$res=strrev($cad);
			}
			else if(ctype_upper($key))
			{
				$prim=substr($cad,0,2);
				$fin=substr($cad,2);
				$res=$fin.$prim;
			}
			else
				$res='La llave deben ser sólo dígitos o sólo mayúsculas<br/><a href="prac5Form.php">Volver</a>';
		}
		else		//descifrar
		{
			if(is_numeric($key))
			{
				$res=strrev($cad);
			}
			if(ctype_upper($key))
			{
				$prim=substr($cad,strlen($cad)-2);
				$fin=substr($cad,0,strlen($cad)-2);
				$res=$prim.$fin;
			}
			else
				$res='La llave deben ser sólo dígitos o sólo mayúsculas<br/><a href="prac5Form.php">Volver</a>';
		}
		echo $res.'<br/><a href="prac5Form.php">Volver</a>';
	}
	else
		echo 'Debes poner un mensaje y una llave (dígitos o mayúsculas)<br/><a href="prac5Form.php">Volver</a>';
}
?>