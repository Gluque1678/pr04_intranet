<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Página principal</title>
		<meta charset="utf-8"/>
		<title>Página de login Inicial</title>
		<meta name="autor" content="Germán Luque Sanchez, Xavier Parrot"/>
		<meta name="descripcion" content="Proyecto 1 Animales Perdidos"/>
		<link rel="icon" href="img/image1.png">
		<link rel="stylesheet" href="css/estilo2.css">
	</head>
	<body>
		


		<!-- empezamos a diseñar la pagina con el diseño página index.php-->

		<div id="agrupar">
		<header id="cabecera">
			
			<!--cabecera-titulo y logos de la pagina principal-->
			<figure>
				<a href="index.php"><img src="img/icon1.png"/></a>
				<a href="http://www.misterguau.com/index.php/"><img src="./img/logo.jpg" width="1061" height="177"></a>
				<!--<figcaption>Esta es la imagen de la cabecera</figcaption-->
				<!--<a href="index.php"><img src="img/images2.png"/></a>-->
			</figure>


			<div id="salir">
		
		   <nav id="menu">
					<ul>
						
						<li><a href="index.php">SALIR</a></li>
					</ul>		

			</nav>
		</div>



		<div id="general">
				

			<p>
			<a title="Facebook MISTERGUAU" href="https://www.facebook.com/misterguau" target="_blank"><img id="primera" src="./img/Face.png" alt="Facebook MISTERGUAU"> </a>
			<a title="Youtube MISTERGUAU" href="http://www.youtube.com/user/misterguaucenter" target="_blank"><img id="segunda" src="./img/youtube.png" alt="Youtube MISTERGUAU"> </a>
			<a title="Google MISTERGUAU" href="http://www.google.com/" target="_blank"><img id="tercera" src="./img/Google.png" alt="Google MISTERGUAU"> </a>
			<a title="Wifi MISTERGUAU" href="http://www.wifi.es/" target="_blank"><img id="cuarta" src="./img/wifi.png" ></a>
			</p>

		</div>



		<div id="logoporcentaje"

		<p><a title="Outlet MISTERGUAU" href="http://www.misterguau.com/index.php/outlet-corner-las-mejores-ofertas.html" target="_self"><img src="./img/Oulet_1.jpg" alt="Outlet hasta -70%"></a></p>

	</div>

	<?php
      //realizamos la conexión con mysql
      $con = mysqli_connect('localhost','root','','bd_botiga_animals');

      //como la sentencia SIEMPRE va a buscar todos los registros de la tabla usuario, pongo en la variable $sql esa parte de la sentencia que SI o SI, va a contener
      $sql = "SELECT * FROM tbl_usuario where usu_mail= $_REQUEST[ID]"; /*ORDER BY usu_mail ASC"*/



      //mostramos la consulta para ver por pantalla si es lo que esperábamos o no
      //echo "$sql<br/>";

      //lanzamos la sentencia sql
      $datos = mysqli_query($con, $sql);

      ?>
      <table border>
        <tr>
          <th>Altas Usuarios</th>
		  <th>Contraseña Usuarios</th>
		  <th>Rol</th>
		  <th>Usuario Activos</th>
          
        </tr>

        

        

        <?php

					//recorremos los resultados y los mostramos por pantalla
					//la función substr devuelve parte de una cadena. A partir del segundo parámetro (aquí 0) devuelve tantos carácteres como el tercer parámetro (aquí 25)
					while ($prod = mysqli_fetch_array($datos)){
						echo "<tr><td>$prod[usu_mail]</td>;
								  
								
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
		<a href="administrador.php">Volver</a>
	</body>
</html>