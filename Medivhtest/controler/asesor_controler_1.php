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
	Este archivo carga el menu del usuario tipo asesor y la opcion de consultar los tickets del grupo al que pertenece.
-->

<?php
    include("../view/asesor_menu.php");
?>

<?php
	
	include("../model/consulta_tickets_asesor.php");

    include("../view/asesor_consulta_tickets.php");
?>

</body>
</html>

