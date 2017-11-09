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

</style>>


</head>

<body>

<?php
	
	require("php/conex_db.php");

	$query="select * from PRODUCTOS where Proveedor='Exotic Liquids'";

	$resultados=mysqli_query($conexion,$query);

	while($fila=mysqli_fetch_row($resultados)){

	echo "<table><tr><td>";

	echo $fila[0] . " </td><td>";
	echo $fila[1] . " </td><td>";
	echo $fila[2] . " </td><td>";
	echo $fila[3] . " </td><td>";
	echo $fila[4] . " </td><td>";
		echo $fila[5] . " </td><td>";
			echo $fila[6] . " </td><td>";
				echo $fila[7] . " </td><td>";
					echo $fila[8] . " </td><td>";
						echo $fila[9] . " </td><td>";
							echo $fila[10] . " </td><td></tr></table>";
	echo "<br>";
	echo "<br>";

	}

	mysqli_close($conexion);

	

?>

</body>
</html>