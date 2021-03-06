<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>IT-Tickets 1.0</title>
	<link rel="stylesheet" href="../css/pmain.css">
	<link rel="stylesheet" href="../css/linkspag.css">
	<style type="text/css">
		.logo{
			text-shadow: 2px 3px 4px #666;
			text-transform: capitalize;
			color:#064650;
			-webkit-text-stroke: 1px #666;
		}

		.sesion{
			text-shadow: 1px 2px 3px #666;
			text-align: right;
		}
		
	</style>
</head>
<body>

<table class="tabla">
	<tr>
		<td>
			<h2 class="logo">IT-Ticket 1.0</h2>
		</td>
		<td class="sesion">
			<?php

			session_start();

			if(!isset($_SESSION["usu_sesion"])){

				header("location:../view/login.php");
			}

			include("../model/admin_sesion.php");

			?>
			<a id='pag' href="../controler/cierra_sesion.php">Cerrar Sesión</a>
		</td>
	</tr>
</table>

<header>
	<input type="checkbox" id="btn-menu">
	<label for="btn-menu"><img src="../images/menu.png">
	</label>
		<nav class="menu">
			<ul>
				<li><a href="../controler/asesor_controler_1.php">Gestion Tickets</a></li>
				<li><a href="../controler/asesor_controler_2.php">Gestion Activos</a></li>
				<li><a href="../controler/asesor_controler_3.php">Cambiar Contraseña</a></li>
			</ul>
		</nav>
</header>
<br>
<br>
</body>
</html>