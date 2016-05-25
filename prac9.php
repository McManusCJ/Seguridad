<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	$cad=$_POST['text'];

	if($_POST['isbn']=='10')		//ISBN-10
	{
		$res=0;
		for($x=0;$x<9;$x++)
		{
			$c=substr($cad,$x,1);
			$i=(intval($c))*($x+1);
			$res=$res+$i;
		}
		if(abs($res%11)==substr($cad,9))
			echo 'Es válido<br/><a href="prac9Form.php">Volver</a>';
		else
			echo 'No es válido<br/><a href="prac9Form.php">Volver</a>';
	}
	else if($_POST['isbn']=='13')							//ISBN-13
	{
		$par=0;
		$non=0;
		for($x=0;$x<=11;$x++)
		{
			$c=substr($cad,$x,1);
			$i=intval($c);
			if($x%2==0)			//si la posición es par
				$par=$par+$i;
			else
				$non=$non+$i;
		}
		$res=(10-($non+($par*3)))%10;
		
		if(abs($res)==substr($cad,12))
			echo 'Es válido<br/><a href="prac9Form.php">Volver</a>';
		else
			echo 'No es válido<br/><a href="prac9Form.php">Volver</a>';
	}
}
?>