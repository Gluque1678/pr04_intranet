<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ejemplo de formularios con datos en BD</title>
	</head>
	<body>
		<?php
			//realizamos la conexión con mysql
			$con = mysqli_connect('localhost','root','','bd_botiga_animals');

			//esta consulta devuelve todos los datos del producto cuyo campo clave (pro_id) es igual a la id que nos llega por la barra de direcciones
			$sql = "SELECT * FROM tbl_usuario WHERE us_mail=$_REQUEST[id]";

			//mostramos la consulta para ver por pantalla si es lo que esperábamos o no
			//echo "$sql<br/>";

			//lanzamos la sentencia sql
			$datos = mysqli_query($con, $sql);
			if(mysqli_num_rows($datos)>0){
				

				?>
				

				<table border="1" style="width:1350px; <tbody>">
        <caption><h1>Contenido del Anuncio</caption></h1>
        
        <tr>
          <td style=width:15% px;>Nombre</td>
          <td style=width:10% px;>Fecha</td>
          <td style=width:10% px;>Raza</td>
          <td style=width:20% px;>Tipo de Anuncio </td>
          <td style=width:45% px;>Descripción</td>
          <td style=width:10px;>Modificadores</td>
          
        </tr>

					<?php

					//recorremos los resultados y los mostramos por pantalla
					//la función substr devuelve parte de una cadena. A partir del segundo parámetro (aquí 0) devuelve tantos carácteres como el tercer parámetro (aquí 25)
					while ($prod = mysqli_fetch_array($datos)){
						echo "<tr><td>$prod[usu_mail]</td>;
								<td>$prod[usu_nombre]</td>;
								<td>$prod[usu_apellidos]</td>;
								<td>$prod[usu_nivel]</td>;
								</tr>";
					}
					


					?>
					

					</table>
				

					<?php
			} else {
				echo "Usuarios con id=$_REQUEST[id] no encontrado!";
			}
			//cerramos la conexión con la base de datos
			mysqli_close($con);
		?>
		<br/><br/>
		<a href="usuario.php">Volver</a>
	</body>
</html>

