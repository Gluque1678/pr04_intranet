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


<section id="seccion">
      <article id="headerLogin">
        
        


  <div id="logoporcentaje"

    <p><a title="Outlet MISTERGUAU" href="http://www.misterguau.com/index.php/outlet-corner-las-mejores-ofertas.html" target="_self"><img src="./img/Oulet_1.jpg" alt="Outlet hasta -70%"></a></p>

  </div>


  

<!--Desde Aqui meto el codigo para insertar un anuncio-->

 <?php
      //realizamos la conexión con mysql
      $con = mysqli_connect('localhost','root','','bd_botiga_animals');

      //como la sentencia SIEMPRE va a buscar todos los registros de la tabla usuario, pongo en la variable $sql esa parte de la sentencia que SI o SI, va a contener
      $sql = "SELECT * FROM tbl_usuario ORDER BY us_mail ASC";



      //mostramos la consulta para ver por pantalla si es lo que esperábamos o no
      //echo "$sql<br/>";

      //lanzamos la sentencia sql
      $datos = mysqli_query($con, $sql);

      ?>

    </br>

      <table bgcolor="#00ff00";border="1" style="width:1345px; <tbody>">
      
        <tr>
          <td style=width:15% px; text align="center" background-color="red";>Nombre </td>
          <td style=width:15% px; text align="center">Tipo de Anuncio </td>
          <td style=width:50% px;text align="center">Descripción</td>
          <td style=width:20px;text align="center">Modificadores</td>
          
        </tr>



        <!--<?php

        //recorremos los resultados y los mostramos por pantalla
        //la función substr devuelve parte de una cadena. A partir del segundo parámetro (aquí 0) devuelve tantos carácteres como el tercer parámetro (aquí 25)
        while ($prod = mysqli_fetch_array($datos)){
          
          
         echo "<td>";

          echo "<a href='administradorver.php?id=$prod[us_mail]'>$prod[us_nombre]</a>";
          echo "</td><td>" . substr($prod['usu_password'], 0, 25) . "</td><td>$prod[rol]</td><td>$prod[usuario_actiu]</td><td>";
          
          //enlace a la página que modifica el producto pasándole la id (clave primaria)
          if($prod['usuario_actiu']==1){
            
            echo  "<a href='administradormodificar.php?id=$prod[us_mail]'><i class='fa fa-pencil fa-2x fa-pull-left fa-border' title='modificar'></i></a>";
          }


          //enlace a la página que elimina el producto pasándole la id (clave primaria)
          if($prod['usuario_actiu']==1){
            echo "<a href='administradoreliminar.php?id=$prod[us_mail]'><i class='fa fa-trash fa-2x fa-pull-left fa-border' title='borrar'></i></a>";
          }

          //enlace a la página que modifica el producto (poniendo el campo pro_actiu a 0 o a 1, lo activa o lo desactiva) pasándole la id (clave primaria)
          if($prod['usuario_actiu']==1){
            echo "<a href='administradoractivar_desactivar.proc.php?id=$prod[us_mail]'><i class='fa fa-eye-slash fa-2x fa-pull-left fa-border' title='desactivar'></i></a>";
          } else {
            echo "</td><td><a href='administradoractivar_desactivar.proc.php?id=$prod[us_mail]'><i class='fa fa-eye fa-2x fa-pull-left fa-border' title='activar'></i></a>";
          }

          echo "</a></td></tr>";
        }

        ?>-->
      
      </tbody>

      </table>

     
      <a href="administradorinsertar.php"><i class='fa fa-plus-square fa-2x fa-pull-left fa-border'></i></a>

        


        <?php
      //cerramos la conexión con la base de datos
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


                      

                               
    
    

    





