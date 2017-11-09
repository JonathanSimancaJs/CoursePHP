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
	Este archivo carga el menu del usuario tipo asesor y la opcion de ver la información del ticket y editarlo.
-->

<?php
    include("../view/asesor_menu.php");
?>

<?php
	
	$idticket=$_GET["tick"];

	require("../model/muestra_ticket_asesor.php");

    include("../view/asesor_revisa_ticket.php");
?>

</body>
</html>

