<?php 

session_start();

if(!$_SESSION["Ingreso"]){
	header("location:index.php?ruta=ingreso");
	exit();
}

?>

<?php

session_destroy();

?>

<br>
<h1>Haz cerrado sesión</h1>

