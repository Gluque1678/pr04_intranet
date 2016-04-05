<!DOCTYPE html>

<html>
  
  <head>
    <title>Página principal</title>
    <meta charset="utf-8"/>
    <title>Página de login Inicial</title>
    <meta name="autor" content="Germán Luque Sanchez, Xavier Parrot"/>
    <meta name="descripcion" content="Proyecto 1 Animales Perdidos"/>
    
    <link rel="stylesheet" href="css/estilo3.css">

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

    </header>



		
                                            
              <?php
//echo "campo1: $_REQUEST[campo1]";
//echo "campo2: $_REQUEST[campo2]";

  $con = mysqli_connect('localhost', 'root', '', 'bd_botiga_animals');

  $str = "SELECT * FROM `tbl_tipus_animal`, `tbl_raca`, `tbl_anunci`, `tbl_municipi`, `tbl_contacte` 
          WHERE `tbl_tipus_animal`.`tipus_anim_id` = $_REQUEST[campo1] 
          AND `tbl_raca`.`tipus_anim_id` = `tbl_tipus_animal`.`tipus_anim_id` 
          AND `tbl_raca`.`raca_id` = $_REQUEST[campo2] 
          AND `tbl_anunci`.`raca_id` = `tbl_raca`.`raca_id` 
          AND `tbl_municipi`.`municipi_id` = $_REQUEST[campo3] 
          AND `tbl_municipi`.`municipi_id` = `tbl_anunci`.`mun_id` 
          AND `tbl_anunci`.`contact_id` = `tbl_contacte`.`contact_id` 
          ORDER BY `tbl_tipus_animal`.`tipus_anim_id` ASC";

  $str2 = "SELECT * FROM `tbl_tipus_animal`, `tbl_raca`, `tbl_anunci`, `tbl_municipi`, `tbl_contacte` 
          WHERE `tbl_tipus_animal`.`tipus_anim_id` = $_REQUEST[campo1] 
          AND `tbl_raca`.`tipus_anim_id` = `tbl_tipus_animal`.`tipus_anim_id` 
          AND `tbl_raca`.`raca_id` = $_REQUEST[campo2] 
          AND `tbl_anunci`.`raca_id` = `tbl_raca`.`raca_id` 
          AND `tbl_municipi`.`municipi_id` = `tbl_anunci`.`mun_id` 
          AND `tbl_anunci`.`contact_id` = `tbl_contacte`.`contact_id` 
          ORDER BY `tbl_tipus_animal`.`tipus_anim_id` ASC";


  $str3 = "SELECT * FROM `tbl_tipus_animal`, `tbl_raca`, `tbl_anunci`, `tbl_municipi`, `tbl_contacte` 
          WHERE `tbl_raca`.`tipus_anim_id` = `tbl_tipus_animal`.`tipus_anim_id` 
          AND `tbl_anunci`.`raca_id` = `tbl_raca`.`raca_id` 
          AND `tbl_municipi`.`municipi_id` = $_REQUEST[campo3] 
          AND `tbl_municipi`.`municipi_id` = `tbl_anunci`.`mun_id` 
          AND `tbl_anunci`.`contact_id` = `tbl_contacte`.`contact_id` 
          ORDER BY `tbl_tipus_animal`.`tipus_anim_id` ASC";

  $str4 = "SELECT * FROM `tbl_tipus_animal`, `tbl_raca`, `tbl_anunci`, `tbl_municipi`, `tbl_contacte` 
          WHERE `tbl_raca`.`tipus_anim_id` = `tbl_tipus_animal`.`tipus_anim_id` 
          AND `tbl_anunci`.`raca_id` = `tbl_raca`.`raca_id` 
          AND `tbl_municipi`.`municipi_id` = `tbl_anunci`.`mun_id` 
          AND `tbl_anunci`.`contact_id` = `tbl_contacte`.`contact_id` 
          ORDER BY `tbl_tipus_animal`.`tipus_anim_id` ASC";

  $str5 = "SELECT * FROM `tbl_tipus_animal`, `tbl_raca`, `tbl_anunci`, `tbl_municipi`, `tbl_contacte` 
          WHERE `tbl_tipus_animal`.`tipus_anim_id` = $_REQUEST[campo1] 
          AND `tbl_raca`.`tipus_anim_id` = `tbl_tipus_animal`.`tipus_anim_id` 
          AND `tbl_anunci`.`raca_id` = `tbl_raca`.`raca_id` 
          AND `tbl_municipi`.`municipi_id` = `tbl_anunci`.`mun_id` 
          AND `tbl_anunci`.`contact_id` = `tbl_contacte`.`contact_id` 
          ORDER BY `tbl_tipus_animal`.`tipus_anim_id` ASC";

  $str6 = "SELECT * FROM `tbl_tipus_animal`, `tbl_raca`, `tbl_anunci`, `tbl_municipi`, `tbl_contacte` 
          WHERE `tbl_tipus_animal`.`tipus_anim_id` = $_REQUEST[campo1] 
          AND `tbl_raca`.`tipus_anim_id` = `tbl_tipus_animal`.`tipus_anim_id` 
          AND `tbl_anunci`.`raca_id` = `tbl_raca`.`raca_id` 
          AND `tbl_municipi`.`municipi_id` = $_REQUEST[campo3]
          AND `tbl_municipi`.`municipi_id` = `tbl_anunci`.`mun_id` 
          AND `tbl_anunci`.`contact_id` = `tbl_contacte`.`contact_id` 
          ORDER BY `tbl_tipus_animal`.`tipus_anim_id` ASC";

 // echo "$str</br>";

  //$sql = mysqli_query($con,$str);
  $datos = mysqli_query($con,$str);
  $datos2 = mysqli_query($con,$str2);
  $datos3 = mysqli_query($con,$str3);
  $datos4 = mysqli_query($con,$str4);
  $datos5 = mysqli_query($con,$str5);
  $datos6 = mysqli_query($con,$str6);

  

     if ($_REQUEST['campo1'] == 'tipus' && $_REQUEST['campo2'] == 'raca' && $_REQUEST['campo3'] == 'municipi') {
     
      while($pro4 = mysqli_fetch_array($datos4)) {
      echo "<center>";     
      echo utf8_encode("nom: $pro4[anu_nom]</br>"); 
      echo utf8_encode("descripcion: $pro4[anu_contingut]</br>");
      echo utf8_encode("data: $pro4[anu_data]</br>");
      echo utf8_encode("estado: $pro4[anu_tipus]");   
      echo "</br>";
      echo "</br>";
      echo utf8_encode("nombre del contacto: $pro4[contact_nom]</br>");
      echo utf8_encode("telefono del contacto: $pro4[contact_telf]</br>");
      echo utf8_encode("direccion del contacto: $pro4[contact_adre]</br></br>");
      $fichero="../pagina web/img/$pro4[anu_foto]";
      if(file_exists($fichero)) {
      echo "<img src='$fichero' width='300px' height='200px'></br></br>";
      }
      echo "<hr>";
      echo "</br>";
      echo "</center>";
    }
    }

    

      elseif($_REQUEST['campo1'] != 'tipus' && $_REQUEST['campo2'] == 'raca' && $_REQUEST['campo3'] == 'municipi') {
    
        while($pro5 = mysqli_fetch_array($datos5))  {
         echo "<center>"; 
         echo utf8_encode("nom: $pro5[anu_nom]</br>"); 
         echo utf8_encode("descripcion: $pro5[anu_contingut]</br>");
         echo utf8_encode("data: $pro5[anu_data]</br>");
         echo utf8_encode("estado: $pro5[anu_tipus]");   
         echo "</br>";
         echo "</br>";
         echo utf8_encode("nombre del contacto: $pro5[contact_nom]</br>");
         echo utf8_encode("telefono del contacto: $pro5[contact_telf]</br>");
         echo utf8_encode("direccion del contacto: $pro5[contact_adre]</br></br>");
         $fichero="../pagina web/img/$pro5[anu_foto]";
         if(file_exists($fichero)) {
         echo "<img src='$fichero' width='300px' height='200px'></br></br>";
          }
          echo "<hr>";
          echo "</br>";
        echo "</center>"; 
      }  
    } 

      elseif($_REQUEST['campo1'] != 'tipus' && $_REQUEST['campo2'] != 'raca' && $_REQUEST['campo3'] == 'municipi') {
    
        while($pro2 = mysqli_fetch_array($datos2))  {
         echo "<center>"; 
         echo utf8_encode("nom: $pro2[anu_nom]</br>"); 
         echo utf8_encode("descripcion: $pro2[anu_contingut]</br>");
         echo utf8_encode("data: $pro2[anu_data]</br>");
         echo utf8_encode("estado: $pro2[anu_tipus]");   
         echo "</br>";
         echo "</br>";
         echo utf8_encode("nombre del contacto: $pro2[contact_nom]</br>");
         echo utf8_encode("telefono del contacto: $pro2[contact_telf]</br>");
         echo utf8_encode("direccion del contacto: $pro2[contact_adre]</br></br>");
         $fichero="../pagina web/img/$pro2[anu_foto]";
         if(file_exists($fichero)) {
         echo "<img src='$fichero' width='300px' height='200px'></br></br>";
          }
          echo "<hr>";
          echo "</br>";
        echo "</center>"; 
      }  
    } 

    elseif ($_REQUEST['campo1'] == 'tipus' && $_REQUEST['campo2'] == 'raca' && $_REQUEST['campo3'] != 'municipi') {
     
      while($pro3 = mysqli_fetch_array($datos3)) {
      echo "<center>"; 
      echo utf8_encode("nom: $pro3[anu_nom]</br>"); 
      echo utf8_encode("descripcion: $pro3[anu_contingut]</br>");
      echo utf8_encode("data: $pro3[anu_data]</br>");
      echo utf8_encode("estado: $pro3[anu_tipus]");   
      echo "</br>";
      echo "</br>";
      echo utf8_encode("nombre del contacto: $pro3[contact_nom]</br>");
      echo utf8_encode("telefono del contacto: $pro3[contact_telf]</br>");
      echo utf8_encode("direccion del contacto: $pro3[contact_adre]</br></br>");
      $fichero="../pagina web/img/$pro3[anu_foto]";
      if(file_exists($fichero)) {
      echo "<img src='$fichero' width='300px' height='200px'></br></br>";
      }
      echo "<hr>";
      echo "</br>";
      echo "</center>";
    }
    }
    
    elseif($_REQUEST['campo1'] != 'tipus' && $_REQUEST['campo2'] == 'raca' && $_REQUEST['campo3'] != 'municipi') {
    
        while($pro6 = mysqli_fetch_array($datos6))  {
         echo "<center>"; 
         echo utf8_encode("nom: $pro6[anu_nom]</br>"); 
         echo utf8_encode("descripcion: $pro6[anu_contingut]</br>");
         echo utf8_encode("data: $pro6[anu_data]</br>");
         echo utf8_encode("estado: $pro6[anu_tipus]");   
         echo "</br>";
         echo "</br>";
         echo utf8_encode("nombre del contacto: $pro6[contact_nom]</br>");
         echo utf8_encode("telefono del contacto: $pro6[contact_telf]</br>");
         echo utf8_encode("direccion del contacto: $pro6[contact_adre]</br></br>");
         $fichero="../pagina web/img/$pro6[anu_foto]";
         if(file_exists($fichero)) {
         echo "<img src='$fichero' width='300px' height='200px'></br></br>";
          }
          echo "<hr>";
          echo "</br>";
        echo "</center>"; 
      }  
    } 

    elseif($_REQUEST['campo1'] != 'tipus' && $_REQUEST['campo2'] != 'raca' && $_REQUEST['campo3'] != 'municipi') {
    
        while($pro = mysqli_fetch_array($datos))  {
         echo "<center>"; 
         echo utf8_encode("nom: $pro[anu_nom]</br>"); 
         echo utf8_encode("descripcion: $pro[anu_contingut]</br>");
         echo utf8_encode("data: $pro[anu_data]</br>");
         echo utf8_encode("estado: $pro[anu_tipus]");   
         echo "</br>";
         echo "</br>";
         echo utf8_encode("nombre del contacto: $pro[contact_nom]</br>");
         echo utf8_encode("telefono del contacto: $pro[contact_telf]</br>");
         echo utf8_encode("direccion del contacto: $pro[contact_adre]</br></br>");
         $fichero="../pagina web/img/$pro[anu_foto]";
         if(file_exists($fichero)) {
         echo "<img src='$fichero' width='300px' height='200px'></br></br>";
          }
          echo "<hr>";
          echo "</br>";
        echo "</center>"; 
      }  
    } 

   else {
    echo "NO SE HAN ENCONTRADO ANIMALES DE ESTA RAZA, LLAME A LA PERRERA DE SU PUEBLO GUAPO";
  }


  mysqli_close($con);
?>
        





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
</script><script src="./PECES_files/ga.js" type="text/javascript"></script>
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
<div id="stcpDiv" style="position: absolute; top: -1999px; left: -1988px;">ShareThis Copy and Paste</div><iframe id="stSegmentFrame" name="stSegmentFrame" src="./img/getSegment.html" frameborder="0" scrolling="no" width="0px" height="0px" style="display:none;"></iframe><div id="stwrapper" class="stwrapper stwrapper4x" style="display: none;"><iframe allowtransparency="true" id="stLframe" class="stLframe" name="stLframe" frameborder="0" scrolling="no" src="./img/index.e04a19abf1c276d639d3e98702185dab.html"></iframe></div><div id="stOverlay" onclick="javascript:stWidget.closeWidget();">

                    </div>


            </article>  
    

    </section>




</body>


</html>