<?php
session_name('usser');
session_start();
if(isset($_SESSION['nombre']))
{
	echo '<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Playfair</title>
		</head>
		<body>
			<h1>Cifrado Playfair-n</h1>
			<form action="prac2.php" method="post">
				Mensaje: <input type="text" name="Mensaje" id="men" autofocus/><br/>
				Playfair-<input type="number" min="2" max="10" name="num" id="num"/><br/>
				<input type="checkbox" name="accion" value="si" id="accion"/>Descifrar<br/>
				<input type="submit" id="send"/>
			</form>
			<a href="principal.php">Regresar</a>
			<div id="resultado">
			</div>
			
			<!--<script src="./jquery-2.2.3.js">
			</script>
			
			<script>
				$("#send").click(function(event){
					var text=$("#men").val();
					var lala=text.split("");
					var enviar=lala.toString();
					console.log(enviar);
					event.preventDefault();
					$.ajax({
						url:"playfair-n.php",
						type:"POST",
						dataType:"text",
						data:{	Mensaje:enviar,
								num:$("#num").val(),
								opcion:$("#accion").val()
							},
						success:function(result){
							$("#resultado").html(result);
						}
					});
				});
			</script>-->
		</body>
	</html>';
}
?>	