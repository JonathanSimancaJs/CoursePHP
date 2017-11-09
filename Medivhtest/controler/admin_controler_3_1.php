<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color:#FAFAD2;
		}
	</style>
</head>
<body>

<!--
	Este archivo carga el menu del usuario administrador y la opcion de crear o borrar, los usuarios tipo asesores.
-->

<?php
	
	include("../view/admin_menu.php");

	require_once("../model/asesores_modelo.php");

	$asesor=new Asesores_modelo();

	$matrizAsesor=$asesor->get_asesores();

	require_once("../view/admin_edita_asesores.php");
?>

</body>
</html>
