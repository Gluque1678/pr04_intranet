<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	session_start();
	//si existe la variable de sesión error, la guardamos en la variable error ya que al destruir la sesión, esta desaparecería
	if(isset($_SESSION ['error'])){
		$error=$_SESSION['error'];
	}
	//destruimos la sesión para no poder llegar de manera indirecta a ninguna página posterior a la de login
	session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
	
	<head>

		<meta charset="utf-8"/>
		<title>Página de login Inicial</title>
		<meta name="autor" content="Germán Luque Sanchez,Xavier Parrout"/>
		<meta name="descripcion" content="Proyecto Animales Perdidos"/>
		<link rel="icon" href="img/image1.png">
		<link rel="stylesheet" href="css/estilo.css">

	</head>

	<body>

		
		<div id="agrupar">
		<header id="cabecera">
			
			<!--cabecera-titulo y logos de la pagina principal-->
			<figure>
				<a href="index.php"><img src="img/icon1.png"/></a>
				<a href="http://www.misterguau.com/index.php/"><img src="./img/logo.jpg" width="1061" height="177"></a>
				<!--<figcaption>Esta es la imagen de la cabecera</figcaption-->
				<!--<a href="index.php"><img src="img/image1.png"/></a>-->

			</figure>
		

		</header>		
			


			

		
		<section id="seccion">
			<article id="headerLogin">
				
					<h4></h4>
				
			

			<div id="contenido">
				<div id="formCentro">


		<!--Formulario del Login -->

		<div id="cuerpo">

		<form name="f1" action="login.proc.php" method="get">
			
			
			Mail: <input type="text" name="mail" size="50" maxlength="40" style="margin-left: 0px; margin-top:100px;font-size: 40%;"><br></br>
			Password: <input type="password" name="pass" id="password" size="40" maxlength="25" style="margin-left: 0px; margin-top:40px; color: red; text-align:center;font-size:40%">
					<input type="submit" name="acce" id="acceder" size="45" value="ENTRAR" style="margin-left: 0px; margin-top:40px; color: red; text-align:center;font-size:40%">
			

		</form>

		</div>

			<div id="error" style="margin-left: -190px;margin-top:200px; color: red; ">
				<p>
			
			
					<?php
						if(isset($error)){
							echo "ERROR: " . $error;
							
						}
					?>	
				</p>
			
			</div>	

		<!--FIN FORMULARIO -->

					</div>
			</div>

			

	
		
				</article>
		</section>

		<br></br>

	<!--Aqui se pondria el aside que ocupara la parte derecha todo lo que ocupe el section -->
	<!--Aqui se pondria el footer que es la parte de abajo -->
		
		<!--<aside id="columna"> <hi></h1>
		</aside>-->
		
		<!--<footer id="pie">

			<h1><address><a href="http://AnimalesPerdidos.com"></a></address>
		
		</footer>-->
	</div>
</body>

</html>