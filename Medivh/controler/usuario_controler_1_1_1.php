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
	Este archivo carga el menu del usuario tipo empleado y la opcion que le permite revisar la información del ticket que ha creado.
-->


<?php
    include("../view/usuario_menu.php");
?>

<?php
	
	$iduser=$_GET["user"];
	$idticket=$_GET["tick"];

	include("../model/muestra_ticket.php");

    include("../view/usuario_revisa_ticket.php");
?>

</body>
</html>

