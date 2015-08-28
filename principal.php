<?php include("/lib/seguridad.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>SIMP</title>

 <link href="js/estiloprincipal.css" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" type="text/css" href="js/easy-slider-css.css">

    
    <script src='js/jquery.min.js' type='text/javascript'> </script> 
    <script src="js/easy-slider.js"></script>
    
     <script language="javascript">

function modiframe(destino)
{
document.getElementById("marco").src=destino
}
</script>  
</head>

<body
background="imagenes/fondo.png">


<div id="contenedor">

<div id="logo"> 
  <img src="./imagenes/TEC.png"></div>
<div class="sliderContainer">

      <a href="#siguiente" class="next" title="Siguiente"> </a>
      <a href="#anterior" class="prev" title="Anterior"></a>

      <div id="logo2"> <img src="./imagenes/logorecursos.png" /></div>
      <div id="slider">
        <div id_"ade"></div>

          <div class="slidesContainer" style="width: 1800px;">
              <div class="slide"><img src="./imagenes/logo2.png" alt="Imagen 01"></div>
              <div class="slide"><img src="./imagenes/logo3.png" alt="Imagen 02"></div>
              <div class="slide"><img src="./imagenes/teca.png" alt="Imagen 03"></div>
             
             
          </div> <!-- /slidesContainer -->

    </div> <!-- /slider -->

</div>


<div id="menu">
<ul>
    <li><a href="javascript:modiframe('./recursos/f_inicio.html')">Inicio</a> 
      
    </li>
    <li><a href="#">Prestaciones</a> 
      <ul>
        <li> <a href="javascript:modiframe('./recursos/f_java.html')">Nuevo</a></li>
        <li><a href="javascript:modiframe('./recursos/f_c.html')">Buscar</a></li>
        <li> <a href="javascript:modiframe('./recursos/f_vb.html')">Visual Basic</a></li>
      </ul>
    </li>
    
    <li><a href="#">Mov.De Personal</a> 
      <ul>
        <li><a href="javascript:modiframe('./recursos/f_mysql.html')">MySQL</a></li>
      </ul>
    </li>
    
    <li><a href="#">Serv.Al Personal</a> 
      <ul>
        <li><a href="#">Constancia</a>
        <ul>
        <li><a href="javascript:modiframe('./recursos/f_php.html')">Antiguedad</a>
        <li><a href="javascript:modiframe('./recursos/f_php.html')">Compatibilidad</a>
        </ul>
        </li>
      </ul>
    </li>
    
    <li><a href="javascript:modiframe('./recursos/f_utilidades.html')">Admon.De Plantilla</a> 
      <ul>
        <li><a href="javascript:modiframe('./recursos/f_php.html')">Alta</a></li>
        <li><a href="javascript:modiframe('./recursos/f_jsp.html')">Baja</a></li>
        <li><a href="javascript:modiframe('./recursos/f_jsp.html')">Actualizar</a></li>
        <li><a href="javascript:modiframe('./recursos/f_jsp.html')">Reportes</a></li>
      </ul>
    </li>
    <li><a href="./lib/cerrar_sesion.php">Salir</a> 
      
    </li>
</ul>
</div><!--div menu -->




<div id="contenido" ></br></br>

<iframe id="marco" width="90%" height="100%" frameborder="0" scrolling="yes"  src="./recursos/f_inicio.html">

Este es el IFrame

</iframe>




</div><!--div contenido-->
<div id="barra">




<div id="enlaces">
<h3>Sitios Sugeridos!</h3>
<a href="http://172.168.0.130"><img src="./imagenes/sii.png" alt="nombre" border="0"></br>Sistema Integlal de Informaci&oacute;n.</a> </br></br></br>
<a href="http://www.sep.gob.mx/"><img src="imagenes/lsep.png" alt="nombre" border="0"></br>Secretaria de Educaci&oacute;n Publica.</a> </br></br></br>
<a href="http://www.tecnm.mx/"><img src="./imagenes/tnmex.png" alt="nombre" border="0" width="100" height="90"></br>Tec. Nacional de Mexico.</a> </br></br></br>
<a href="http://portalautoservicios.sep.gob.mx/"><img src="./imagenes/portal.png" alt="nombre" border="0" ></br> Portal de Autoservicios.</a> </br>




</div> <!-- fin div enlaces -->

</div><!--div barra-->

</div><!--fin div contenedor-->





<div id="pie">   
 
    <a href="https://www.google.com.mx/maps/place/Instituto+Tecnol%C3%B3gico+de+Cd.+Altamirano/@18.3713968,-100.6799628,199m/data=!3m1!1e3!4m2!3m1!1s0x84332c4eeb361b65:0x5ccd10556cf552d9">Av. Pungarabato, Poniente, S/N, Col. Morelos, Cd. Altamiranos, Guerrerro. C.P. 40660  </a> </br> 
    <a href="www.italtamirano.edu.mx">Visitanos:/ITCAltamirano ò www.italtamirano.edu.mx </a> &nbsp&nbsp
    
    

</div><!--div pie-->



</body>
</html>