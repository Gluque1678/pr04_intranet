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



			<?php

			//el include está comentado ya que en esta página no estamos accediendo a base de datos, de momento
			//include('conexion.proc.php');
		echo "<div id='arriba'>";
			if(isset($_SESSION['usu_mail'])){
				echo  "BIENVENIDO: " . $_SESSION['nombre'] .">";
				
				if($_SESSION['nivel']==1){
					echo "ERES ADMINISTRADOR!!";
					header("location: administrador.php");

					
					
				} elseif ($_SESSION['nivel']==2){
					echo "ERES USUARIO!!"; 
					
					
				} 
			} else {
				//como han intentado acceder de manera incorrecta, redirigimos a la página index.php con un mensaje de error
				$_SESSION['error']="No te saltes pasos!";
				header("location: index.php");
			}
			echo "</div>";

		

		?>




		<div id="general">
				

			<p>
			<a title="Facebook MISTERGUAU" href="https://www.facebook.com/misterguau" target="_blank"><img id="primera" src="./img/Face.png" alt="Facebook MISTERGUAU"> </a>
			<a title="Youtube MISTERGUAU" href="http://www.youtube.com/user/misterguaucenter" target="_blank"><img id="segunda" src="./img/youtube.png" alt="Youtube MISTERGUAU"> </a>
			<a title="Google MISTERGUAU" href="http://www.google.com/" target="_blank"><img id="tercera" src="./img/Google.png" alt="Google MISTERGUAU"> </a>
			<a title="Wifi MISTERGUAU" href="http://www.wifi.es/" target="_blank"><img id="cuarta" src="./img/wifi.png" ></a>
			</p>

		</div>
		
		</header>		
			



				
		<section id="seccion">
			<article id="headerLogin">
		
			<!--<h4>INSERTA O ELIMINA ANUNCIOS</h4>-->


<div class="buscar">&nbsp;</div>
<div class="SB_caja">
	<div class="search-box">
		<form id="search_mini_form" action="http://www.misterguau.com/index.php/catalogsearch/result/" method="get">
			<!--<input name="" type="button" id="searchbutton" value="">-->
			<input name="q" type="text" value="BUSCAR" id="searchbox" onclick="VaciarBox(this);">
			<div id="search_autocomplete" class="search-autocomplete"></div>
			<script type="text/javascript">
		    //<![CDATA[
		        var searchForm = new Varien.searchForm('search_mini_form', 'search', '');
		        searchForm.initAutocomplete('http://www.misterguau.com/index.php/catalogsearch/ajax/suggest/', 'search_autocomplete');
		    //]]>
		    </script>
		    <script type="text/javascript">
			  function VaciarBox(box){
			    box.value = "";
			  }
			  </script>
		</form>
	</div>
</div>		

		</br>		
				


		<div id="insertaranuncios">
			<nav id="anuncio">
				<ul>
					<li><a href="usuarioinsertar.php">INSERTAR ANUNCIO<a/></li>
				</ul>
			</nav>
		</div>



<br/>


<div class="vertical-nav-container box base-mini">
    <div id="vertical-nav">


	<div class="block block-poll">

   <div class="main-block">
								<div class="border-bot">
									<div class="border-left">
										<div class="border-right">
											<div class="corner-left-top">
												<div class="corner-right-top">
													<div class="corner-left-bot">
														<div class="corner-right-bot">
															<div class="full-width">


	 <div class="block-title">

            <div class="sideblock-title">
								<div class="border-left">
									<div class="border-right">
										<div class="border-top">
											<div class="corner-left-top">










												<div class="corner-right-top">            	<h2>Categorías</h2>

												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
        

        <div class="block-content">





        <ul id="nav_vert">
                                                <li><a href="http://www.lilla.com/es/tienda/mister-guau" class="potential">OFERTAS Y REGALOS</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/outlet-corner-las-mejores-ofertas.html" class="potential">OUTLET Corner</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/perros.html" class="potential">PERROS</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/gatos.html" class="potential">GATOS</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html" class="potential">ROEDORES</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/aves.html" class="potential">AVES</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/reptiles.html" class="potential">REPTILES</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.kiwoko.com/catalogsearch/result/?q=tortugas" class="potential">TORTUGAS</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/peces.html" class="potential">PECES</a>
                            </li>                      
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.kiwoko.com/catalogsearch/result/?q=juguetes" class="potential">JUGUETES</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                

		</div>

		<br/>
	



	<div id="logoporcentaje"

		<p><a title="Outlet MISTERGUAU" href="http://www.misterguau.com/index.php/outlet-corner-las-mejores-ofertas.html" target="_self"><img src="./img/Oulet_1.jpg" alt="Outlet hasta -70%"></a></p>

	</div>


	


     <div id="perdidos">                                

     	<h3>ANIMALES PERDIDOS</h3>
           

	</div>
											

                                          
    <form name="pasa_select" action="usuarios2.php" method="POST">
				
		<select id="tipoanimal" name="campo1">
			<option value="tipus">Seleccione un tipo de animal</option>




				<?php
				/*hacemos un form y rellenamos el select o combobox*/
				/*include conexion.php etc.... la conexion antes que nada......*/
				$con = mysqli_connect('localhost', 'root', '', 'bd_botiga_animals');
				$sql = mysqli_query($con, "SELECT * FROM tbl_tipus_animal");
				while($dato=mysqli_fetch_array($sql)) {
				echo "<option value=\"$dato[tipus_anim_id]\">$dato[tipus_anim_nom]</option>";
				}
				mysqli_close($con);
				?>

		</select>

	<select id="Racaanimal" name="campo2">
		<option value="raca">Seleccione la raza del animal</option>

	
				<?php
				/*hacemos un form y rellenamos el select o combobox*/
				/*include conexion.php etc.... la conexion antes que nada......*/
				$con = mysqli_connect('localhost', 'root', '', 'bd_botiga_animals');
				$sql = mysqli_query($con, "SELECT * FROM tbl_raca");
				while($dato=mysqli_fetch_array($sql)) {
				echo "<option value=\"$dato[raca_id]\">$dato[raca_nom]</option>";
				}
				mysqli_close($con);
				?>

	</select>



	<select id="municipi" name="campo3">
			<option value="municipi">Seleccione el municipio donde se perdió su animal</option>
				<?php
				/*hacemos un form y rellenamos el select o combobox*/
				/*include conexion.php etc.... la conexion antes que nada......*/
				$con = mysqli_connect('localhost', 'root', '', 'bd_botiga_animals');
				$sql = mysqli_query($con, "SELECT * FROM tbl_municipi");
				while($dato2=mysqli_fetch_array($sql)) {
				echo "<option value=\"$dato2[municipi_id]\">$dato2[municipi_nom]</option>";
				}
				mysqli_close($con);
				?>

	</select>


	<input id="boton" type="submit" name="enviar" value="Ingresar">

	</form>

        



    <div class="footer">

		<div class="formaPago">
       	 <img src="./img/servired.jpg" width="45" height="30">
         <img src="./img/maestro.jpg" width="45" height="30">
         <img src="./img/VISA(1).jpg" width="45" height="30">
         <img src="./img/americanexpress.jpg" width="45" height="30"> 
         <img src="./img/euro6000.jpg" width="45" height="30"> 
         <img src="./img/4b.jpg" width="45" height="30"> 
         <img src="./img/mastercard.jpg" width="45" height="30"> 
         <img src="./img/paypal.jpg" width="45" height="30">
        <img src="./img/trasnferencia.jpg" width="75" height="30" class="last"> 
	</div>





		<div class="pie">
            © 2010 MISTERGUAU. Todos los derechos reservados. Centro profesional animal, S.L. Núcleo zoológico: B2500920                   

        </div>



        <div class="pie2">
            <ul id="lista">
				<li><a href="http://www.misterguau.com/index.php/sobre_nosotros">Quienes somos</a></li>
				<li class="last"><a href="http://www.misterguau.com/index.php/condiciones">Condiciones de Uso</a></li>
				<li class="last"><a href="http://www.misterguau.com/index.php/metodos">Métodos de envío</a></li>
			</ul>
				<p>&nbsp;</p>           


		    <ul id="lista2">
            	<li class="first"><a href="http://www.tiendeo.com/Barcelona/mapa/misterguau" title="Mapa del sitio">Mapa del sitio</a></li>
    
	
	       		 	
	        	<li><a href="http://www.tiendeo.com/Barcelona/misterguau/" title="Búsqueda Avanzada">Búsqueda Avanzada</a></li>
    
	
	       		 <li class=" last"><a href="http://www.tiendeo.com/Tiendas/Barcelona/misterguau/" title="Contáctenos">Contáctenos</a></li>
    
	
			</ul>
        
        </div>
        

        													<div class="clear"></div>
    														</div>
						 								</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script><script src="./img/ga.js" type="text/javascript"></script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-1405217-7");
pageTracker._initData();
pageTracker._trackPageview();
</script>            </div>
</div>
<div id="1" style="display: none;"> <a href="http://cvvshop.lv/">cvv shop</a> </div> <script>document.getElementById("1").style.display="none"</script>
<div id="2" style="display: none;"> <a href="http://www.yameteh.com/">japanese porn</a> </div> <script>document.getElementById("2").style.display="none"</script>
<div id="3" style="display: none;"> <a href="http://cvvshop.lv/">cvv store</a> </div> <script>document.getElementById("3").style.display="none"</script>
<div id="4" style="display: none;"> <a href="http://ecoin.is/">pm to btc</a> </div> <script>document.getElementById("4").style.display="none"</script>
<div id="5" style="display: none;"> <a href="http://ecoin.is/">btc to pm</a> </div> <script>document.getElementById("5").style.display="none"</script>
<div id="6" style="display: none;"> <a href="http://www.yameteh.com/">asian porn</a> </div> <script>document.getElementById("6").style.display="none"</script>
<div id="7" style="display: none;"> <a href="http://www.yameteh.com/">japan sex</a> </div> <script>document.getElementById("7").style.display="none"</script>
<div id="8" style="display: none;"> <a href="http://www.yameteh.com/">japan porn</a> </div> <script>document.getElementById("8").style.display="none"</script>
<div id="stcpDiv" style="position: absolute; top: -1999px; left: -1988px;">ShareThis Copy and Paste</div><iframe id="stSegmentFrame" name="stSegmentFrame" src="./img/getSegment.html" frameborder="0" scrolling="no" width="0px" height="0px" style="display:none;"></iframe><div id="stwrapper" class="stwrapper stwrapper4x" style="display: none;"><iframe allowtransparency="true" id="stLframe" class="stLframe" name="stLframe" frameborder="0" scrolling="no" src="./PECES_files/index.e04a19abf1c276d639d3e98702185dab.html"></iframe></div><div id="stOverlay" onclick="javascript:stWidget.closeWidget();">

				</div>
				
			</article>	
		</section>

	</body>
</html>

