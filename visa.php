<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	if(isset($_POST['visa']))
	{
		$visa=$_POST['visa'];
		if(substr($visa,0,1)=='4')
		{
			$par=0;
			$non=0;
			$r=0;
			$verif=substr($visa,15,1);
			for($x=0;$x<=14;$x++)
			{
				$cont=$x+1;
				$d=intval(substr($visa,$x,1));
				if($cont%2==0)		//si la posición es par
				{
					$par=$par+$d;
				}
				else
				{
					$n=$d*2;
					$non=$non+$n;
					if($n>=10)
						$r++;
				}
			}
			$pre=10-(abs(((($par+$non)*(-1))-$r)%10));
			if($pre==$verif)
				echo 'Es válido<br/><a href="visaForm.php">Volver</a>';
			else
				echo 'Es inválido<br/><a href="visaForm.php">Volver</a>';
		}
		else
			echo 'Es inválido<br/><a href="visaForm.php">Volver</a>';
	}
	else
		echo 'Introduce el número de tu tarjeta<br/><a href="visaForm.php">Volver</a>';
}
?>