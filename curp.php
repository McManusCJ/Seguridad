<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	if(isset($_POST['curp']) && isset($_POST['anio']))
	{
		$valores=array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','Ñ','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
		$curp=strtoupper($_POST['curp']);
		$primer=substr($curp,16,1);
		$segundo=substr($curp,17,1);
		$anio=$_POST['anio'];
		$val=false;
		
		if(intval($anio)<2000)
			$verifPrim='0';
		else
			$verifPrim='A';
		
		$mult=18;
		$sum=0;
		for($x=0;$x<=15;$x++)
		{
			$c=substr($curp,$x,1);
			$valor=intval(array_search($c,$valores));
			$sum=$sum+($mult*$valor);
			$mult--;
		}
		
		$verificador=abs($sum%10);
		
		if($verificador==$segundo && $verifPrim==$primer)
			echo 'Sí<br/><a href="curpForm.php">Volver</a>';
		else
			echo 'no<br/><a href="curpForm.php">Volver</a>';
	}
}
?>