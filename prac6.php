<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	/*repor es la llave para cifrar y perro es la llave para descifrar*/

	function descifrarLlave($cad)		//de llave pública a privada
	{
		$pedazoI=substr($cad,strlen($cad)-2);
		$pedazoF=substr($cad,0,strlen($cad)-2);
		$pre=$pedazoI.$pedazoF;
		$priv=strrev($pre);
		return $priv;
	}
	function cifrado($men,$llave)
	{
		if($llave=='perro')
		{
			$cif=strrev($men);
		}
		else
			$cif='Tu mensaje: '.$men.' no se cifró<br/><a href="prac6Form.php">Volver</a>';
		return $cif;
	}

	if(isset($_POST['dato']) && isset($_POST['llave']))
	{
		if(isset($_POST['accion']))
		{
			$cifrado=cifrado($_POST['dato'],$_POST['llave']);
		}
		else{
			$llaveP=descifrarLlave($_POST['llave']);
			$cifrado=cifrado($_POST['dato'],$llaveP);
		}
		echo $cifrado.'<br/><a href="prac6Form.php">Volver</a>';
	}
	else
		echo 'Debes introducir un mensaje y una llave<br/><a href="prac6Form.php">Volver</a>';
}
?>