<?php
//Reanudamos la sesi�n
@session_start();

//Validamos si existe realmente una sesi�n activa o no
if($_SESSION["validando"] != "OK"){
//Si no hay sesi�n activa, lo direccionamos al index.html (inicio de sesi�n)
header("Location: index.html");
exit();
}
?>