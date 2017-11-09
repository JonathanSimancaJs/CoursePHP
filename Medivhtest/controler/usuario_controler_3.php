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
	Este archivo carga el menu del empleado y la opcion que le permite actualizar sus datos.
-->

<?php
    include("../view/usuario_menu.php");

    require_once("../model/usuarios_modelo.php");

	$usuario=new Usuarios_modelo();

	$matrizUsuario=$usuario->get_UsuarioEspecifico($ususess);

    include("../view/usuario_actualiza_datos.php");
?>

</body>
</html>

