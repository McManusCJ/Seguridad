<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	/*Sólo logré que cifrara*/
	if(isset($_POST['Mensaje']) && isset($_POST['num']))
	{
		$playfair=array();
		$texto=$_POST['Mensaje'];
		$n=$_POST['num']-1;
		$cont=0;
		$fila=0;
		$colum=0;
		
		if(!isset($_POST['accion']))		//cifra
		{
			while($cont<strlen($texto))
			{
				$c=substr($texto,$cont,1);
				$playfair[$fila][$colum]=$c;
				if($colum<$n)
					$colum++;
				else
				{
					$fila++;
					$colum=0;
				}
				$cont++;
			}
			//imprimir
			$fila=0;
			$colum=0;
			$print='';
			while($colum<=$n)
			{
				if(isset($playfair[$fila][$colum]))
				{
					$print=$print.$playfair[$fila][$colum];
					$fila++;
				}
				else
				{
					$fila=0;
					$colum++;
				}
			}
			echo $print;
		}
		else							//descifra
		{
			$mod=strlen($texto)%($n+1);		//espacios ocupados en la última fila
			$div=ceil(strlen($texto)/($n+1));	//número de filas
			$contrFil=$div;
			while($cont<strlen($texto))
			{
				$c=substr($texto,$cont,1);
				$playfair[$fila][$colum]=$c;
				//echo 'pone '.$playfair[$fila][$colum].' en '.$fila.','.$colum.'<br/>';
				if($fila<$contrFil-1)
				{
					$fila++;
				}
				else{
					//echo 'col<br/>';
					$fila=0;
					$colum++;
					if($colum+1>$mod && $contrFil==$div)
						$contrFil--;
					
				}
				$cont++;
			}
			//imprimir
			$fila=0;
			$colum=0;
			$print='';
			while($fila<=$div)
			{
				if(isset($playfair[$fila][$colum]))
				{
					$print=$print.$playfair[$fila][$colum];
					$colum++;
				}
				else
				{
					$colum=0;
					$fila++;
				}
			}
			echo $print.'<br/><a href="prac2Form.php">Volver</a>';
		}
	}
	else
		echo 'Debes introducir un mensaje y un valor de n para el playfair<br/><a href="prac2Form.php">Volver</a>';
}
?>