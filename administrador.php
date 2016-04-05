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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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




			<?php

			//el include está comentado ya que en esta página no estamos accediendo a base de datos, de momento
			//include('conexion.proc.php');
		echo "<div id='arriba'>";
			if(isset($_SESSION['usu_mail'])){
				echo  "BIENVENIDO: " . $_SESSION['nombre'] .">";
				
				if($_SESSION['nivel']==1){
					echo "ERES ADMINISTRADOR!!";
					
					
					
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
			

			<!--<div id="insertaranuncios">
			<nav id="anuncio">
				<ul>
					<li><a href="administradorinsertar.php">INSERTAR ANUNCIO<a/></li>
				</ul>
			</nav>
		</div>-->

	</br>

	

     <?php
      //realizamos la conexión con mysql
      $con = mysqli_connect('localhost','root','','bd_botiga_animals');

      //como la sentencia SIEMPRE va a buscar todos los registros de la tabla usuario, pongo en la variable $sql esa parte de la sentencia que SI o SI, va a contener
      $sql = "SELECT * FROM tbl_usuario ORDER BY id_usu ASC";



      //mostramos la consulta para ver por pantalla si es lo que esperábamos o no
      //echo "$sql<br/>";

      //lanzamos la sentencia sql
      $datos = mysqli_query($con, $sql);

      ?>


    
 <table bgcolor="#00ff00";border="1" style="width:1350px; <tbody>">
       



        <tr>
          <td style=width:25% px; text align="left"><h1>Alta Usuarios</h1></td>
          <td style=width:25% px; text align="center">Contraseña Usuarios </td>
          <td style=width:15% px;text align="center">Rol</td>
          <td style=width:10%;text align="rigtht">Activos</td>
          <td style=width:25%;text align="right">Modificaciones</td>
          
                
        </tr>



  

   
        <?php

        /*recorremos los resultados y los mostramos por pantalla
        la función substr devuelve parte de una cadena. A partir del segundo parámetro (aquí 0) devuelve tantos carácteres como el tercer parámetro (aquí 25)*/
       
        while ($prod = mysqli_fetch_array($datos)){

        echo "";
          
          
          
          echo "<a href='administradorver.php?id=$prod[id_usu]'>$prod[usu_nombre]</a>";
          echo "<td>$prod[usu_nombre]&nbsp$prod[usu_apellidos]&nbsp</td><td>" .substr($prod['usu_password'], 0, 25) .  "</td><td>$prod[usu_nivel]&nbsp&nbsp</td><td>$prod[usu_actiu]</td><td>";
           
                     
          //enlace a la página que modifica el producto pasándole la id (clave primaria)
          if($prod['usu_actiu']==1){
            
            echo  "<a href='administradormodificar.php?id=$prod[id_usu]'><i class='fa fa-pencil fa-2x fa-pull-left fa-border' title='modificar'></i></a>";
          }
 

          //enlace a la página que elimina el producto pasándole la id (clave primaria)
          if($prod['usu_actiu']==1){
            echo "<a href='administradoreliminar.php?id=$prod[id_usu]'><i class='fa fa-trash fa-2x fa-pull-left fa-border' title='borrar'></i></a>";
          }

          //enlace a la página que modifica el producto (poniendo el campo pro_actiu a 0 o a 1, lo activa o lo desactiva) pasándole la id (clave primaria)
          if($prod['usu_actiu']==1){
            echo "<a href='administradoractivar_desactivar.proc.php?id=$prod[id_usu]'><i class='fa fa-eye-slash fa-2x fa-pull-left fa-border' title='desactivar'></i></a>";
          } else {
            echo "</td><td><a href='administradoractivar_desactivar.proc.php?id=$prod[id_usu]'><i class='fa fa-eye fa-2x fa-pull-left fa-border' title='activar'></i></a>";
          }

          echo "</a><td></tr>";
        }

        ?>
      </br>
      </table>
  	  </br>
      <a href="administradorinsertar.php"><i class='fa fa-plus-square fa-2x fa-pull-left fa-border'></i></a> 

        


        <?php
      //cerramos la conexión con la base de datos
      mysqli_close($con);
    ?>
  

    	</br>
   		</br>
     <div id="logoporcentaje"

		<p><a title="Outlet MISTERGUAU" href="http://www.misterguau.com/index.php/outlet-corner-las-mejores-ofertas.html" target="_self"><img src="./img/Oulet_1.jpg" alt="Outlet hasta -70%"></a></p>

	</div>

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







		
				
			
