<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	$cad=$_POST['text'];
	$cad1=substr($cad,0,strlen($cad)-4);
	$res=strrev($cad1);
	echo $res.'<a href="prac7.html">Volver</a>';
}
?>