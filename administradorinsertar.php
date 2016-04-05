<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ejemplo de formularios con datos en BD</title>
		<link rel="stylesheet" href="css/estilo2.css">
	</head>
	<body>

			<div id="agrupar">
		<header id="cabecera">
			
			<!--cabecera-titulo y logos de la pagina principal-->
			<figure>
				<a href="index.php"><img src="img/icon1.png"/></a>
				<a href="http://www.misterguau.com/index.php/"><img src="./img/logo.jpg" width="1061" height="177"></a>
				<!--<figcaption>Esta es la imagen de la cabecera</figcaption-->
				<!--<a href="index.php"><img src="img/images2.png"/></a>-->
			</figure>


			
		</div>

		<!--
		<?php
			//realizamos la conexión con mysql
			$con = mysqli_connect('localhost','root','','bd_botiga_animals');

			//como la sentencia SIEMPRE va a buscar todos los registros de la tabla producto, pongo en la variable $sql esa parte de la sentencia que SI o SI, va a contener
			$sql = "SELECT * FROM tbl_usuario ORDER BY us_mail ASC";

			//mostramos la consulta para ver por pantalla si es lo que esperábamos o no
			echo "$sql<br/>";

			//lanzamos la sentencia sql
			$datos = mysqli_query($con, $sql);
			?>
		-->
		<form action="administrador.insertar.pro.php" method="GET">
			</br>
			<textarea id="Anuncio" rows="50" cols="100" text align="center"	ANUNCIO>
			</textarea>
			</br>
			
			<!--	
			<?php
				
				while ($tipo = mysqli_fetch_array($datos)) {
					echo "<option value='$tipo[usu_mail]'><'$tipo[usu_password]'><'$tipo[usu_nivel]'><'$tipo[usu_actiu]'></option>";


				}										
				

			?>

		-->
			
			</select><br/>
			<input type="submit" value="Enviar" class="enviar">
			
		</form>
		
		<br/><br/>
		<a href="administrador.php" class="volver">Volver</a>
	</body>
</html>