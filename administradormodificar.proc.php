<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ejemplo de formularios con datos en bd_botiga_animals</title>
	</head>
	<body>
		<?php
			//realizamos la conexión con mysql lo de fuera del corchete usu_mail, usu_password es lo de la base de datos el interior de los corchetes pondremos lo que hay en administradormodificar.php el name
			$con = mysqli_connect('localhost','root','','bd_botiga_animals');
			$sql = "UPDATE tbl_usuario SET usu_mail='$_REQUEST[user]', usu_password='$_REQUEST[pass]', usu_nivel='$_REQUEST[rol]', usu_actiu='$_REQUEST[usuario_actiu]' WHERE id_usu=$_REQUEST[id]";

			//echo "consulta resultante=".$sql;

			//lanzamos la sentencia sql
			$datos = mysqli_query($con, $sql);

			header("location: administrador.php")
		?>
	</body>
</html>


		
	
		