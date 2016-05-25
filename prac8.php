<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	$cad=$_POST['text'];
	$res=0;
	for($x=0;$x<strlen($cad);$x++)
	{
		$c=substr($cad,$x,1);
		$i=ord($c);
		$res=$res+$i;
	}

	echo $res.'<br/><a href="prac8Form.php">Volver</a>';
}
?>