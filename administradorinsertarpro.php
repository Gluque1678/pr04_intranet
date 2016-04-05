

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ejemplo de formularios con datos en BD</title>
	</head>
	<body>
		<?php
			//realizamos la conexión con mysql
			$con = mysqli_connect('localhost','root','','bd_botiaga_animals');
			$sql = "INSERT INTO tbl_usuario (us_mail, usu_password, usu_nivel, usu_actiu) VALUES ($_REQUEST[us_mail], $_REQUEST[usu_password], $_REQUEST[usu_nivel], $_REQUEST[usu_actiu])";
				

					
			//echo $sql;

			//lanzamos la sentencia sql
			$datos = mysqli_query($con, $sql);

			header("location: administrador.php")
		?>
	</body>
</html>