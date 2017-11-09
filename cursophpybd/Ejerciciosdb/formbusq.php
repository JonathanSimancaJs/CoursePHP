<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<?php
	
	require("php/busqueda.php");

?>

</head>

<body>

<?php
	
	$mibusqueda=$_GET["buscar"];
	$mipag=$_SERVER["PHP_SELF"];

	if($mibusqueda!=NULL){

		ejecuta_consulta($mibusqueda);
	}

	else{
		echo("<form action='" . $mipag . "' method='get'>
			<label>Buscar:<input type='text' name='buscar'></label>
			<input type='submit' name='enviando' value='Go'>
			</form>");
	
		}

?>

</body>
</html>