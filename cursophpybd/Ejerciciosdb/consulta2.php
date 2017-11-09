<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<style> 

	table{
		width:50%;
		border:1px dotted #FF0000;
		margin:auto;

	}	

</style>


</head>

<body>

<?php
	
	require("php/conex_db.php");

	$query="select * from PRODUCTOS where NombreProducto like 'QUESO%'";

	$resultados=mysqli_query($conexion,$query);

	while($fila=mysqli_fetch_array($resultados, MYSQLI_BOTH)){

	echo "<table><tr><td>";

	echo $fila['IdProducto'] . " </td><td>";
	echo $fila['NombreProducto'] . " </td><td>";
	echo $fila['Proveedor'] . " </td><td></tr></table>";

	echo "<br>";
	echo "<br>";

	}

	mysqli_close($conexion);

	

?>

</body>
</html>