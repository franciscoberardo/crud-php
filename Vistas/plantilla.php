<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>

	<style>
		*{
			margin: 0;
			padding: 0;
		}

		nav{
			position:relative;
			margin:auto;
			width:100%;
			height:auto;
			background:#212F3C;
		}

		nav ul{
			position:relative;
			margin:auto;
			width:50%;
			text-align: center;
		}

		nav ul li{
			display:inline-block;
			width:24%;
			line-height: 50px;
			list-style: none;
		}

		nav ul li a{
			color:white;
			text-decoration: none;
			font-size: 25px;
		}

		nav ul li a:hover{
			color:black;
		}

		section{
			position: relative;
			margin: auto;
			width:400px;
		}

		section h1{
			position: relative;
			margin: auto;
			padding:10px;
			text-align: center;
		}

		section form{
			position:relative;
			margin:auto;
			width:400px;
		}

		section form input{
			display:inline-block;
			padding:10px;
			width:95%;
			margin:5px;
		}

		section form input[type="submit"]{
			position:relative;
			margin:20px auto;
			left:4.5%;

		}

		table{
			position:relative;
			margin:auto;
			width:100%;
		}

		table#t1{
			left:-25%;
		}


		table thead tr th{
			padding:10px;
		}

		table tbody tr td{
			padding:10px;
		}
		body{
			background-color: #D0D3D4;
		}
		

	</style>
</head>

<body>

<?php

include "modulos/menu.php";

?>

<section>
	<?php

		$rutas = new RutasControlador();
		$rutas -> Rutas();

	?>
</section>
	
</body>

</html>