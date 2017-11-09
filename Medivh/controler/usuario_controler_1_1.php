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
	Este archivo carga el menu del usuario tipo empleado y la opcion de consultar los tickets que ha creado.
-->


<?php
    include("../view/usuario_menu.php");
?>

<?php

	include("../model/consulta_tickets.php");

    include("../view/usuario_consulta_tickets.php");
?>

</body>
</html>

