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
	Este archivo carga el menu del usuario administrador y la opcion de crear o borrar clientes.
-->

<?php
	
	include("../view/admin_menu.php");

	require_once("../model/clientes_modelo.php");

	$cliente=new Clientes_modelo();

	$matrizCliente=$cliente->get_clientes();

	require_once("../view/admin_edita_cliente.php");
?>

</body>
</html>
