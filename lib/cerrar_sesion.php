<?php
//Reanudamos la sesi�n
@session_start();
//$_SESSION["validando"] = "NO";
@session_destroy();

header("Location: ../index.html");
exit();

?>