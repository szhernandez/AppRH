<?php
/* A continuación, realizamos la conexión con nuestra base de datos en MySQL */
$link = mysql_connect("localhost","root","");
mysql_select_db("bdrh", $link);


/* El query valida si el usuario ingresado existe en la base de datos. 
Se utiliza la función htmlentities para evitar inyecciones SQL. */
$myusuario = mysql_query("select nombre from usuario where 
             nombre = '".htmlentities($_POST["usuario"])."'",$link);
$nmyusuario = mysql_num_rows($myusuario);

/*Si existe el usuario, validamos también la contraseña ingresada y 
el estado del usuario…*/
if($nmyusuario != 0){
$sql = "select nombre from usuario 
where estado = 1 
and nombre = '".htmlentities($_POST["usuario"])."'
and password = '".(htmlentities($_POST["password"]))."'";
$myclave = mysql_query($sql,$link);
$nmyclave = mysql_num_rows($myclave);

/*Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD)
, creamos la sesión del mismo.*/
if($nmyclave != 0){
session_start();
/*Guardamos dos variables de sesión que nos auxiliará para saber si se 
está o no “logueado” un usuario*/
//session_register("controlador")

$_SESSION["validando"] = "OK";	
$_SESSION["user"] = mysql_result($myclave,0,0); 
//nombre del usuario logueado.
//Direccionamos a nuestra página principal del sistema.
header ("Location:principal.php");
}
else{
echo"<script>alert('La contrase\u00f1a del usuario no es correcta.');
window.location.href=\"index.html\"</script>";
}
}else{
echo"<script>alert('El usuario no existe.');window.location.href=\"index.html\"
</script>";
}
mysql_close($link);


?>