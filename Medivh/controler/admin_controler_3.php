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
	Este archivo carga el menu del usuario administrador y la opcion de crear o borrar, los usuarios tipo empleados.
-->

<?php
	
	include("../view/admin_menu.php");

	require_once("../model/usuarios_modelo.php");

	$usuario=new Usuarios_modelo();

	$matrizUsuario=$usuario->get_usuarios();

	require_once("../view/admin_edita_usuarios.php");
?>

</body>
</html>
