<?php
$cad=$_POST['dato'];
$key=$_POST['llave'];
$res=array();

for($n=0;$n<strlen($cad);$n++)
{
	$ccad=substr($cad,$n,1);
	$cllave=substr($key,$n,1);
	$cres=$ccad ^ $cllave;
	$res[]=$cres;
	var_dump($cres);
}
$cadenaR=implode('',$res);
echo $cadenaR;
?>