<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<style> 


</style>>


</head>

<body>


<?php

	require("php/conex_db.php");

	$busqueda=$_GET["buscar"];

	// Paso 1

	$query="select idProducto, NombreProducto, Proveedor, Categoría from PRODUCTOS where Categoría= ?";

	// Paso 2

	$result=mysqli_prepare($conexion,$query);

	// Paso 3 

	$ok=mysqli_stmt_bind_param($result, "s", $busqueda);

	// Paso 4

	$ok=mysqli_stmt_execute($result);

	if($ok==false){
		echo "Error al ejecutar la consulta";
	}

	else{

	//Paso 5

	$ok=mysqli_stmt_bind_result($result,$cod,$nomb,$prov,$cat);

		echo "Articulos encontrados:<br><br>";

	//Paso 6

		while(mysqli_stmt_fetch($result)){

			echo $cod . " " . $nomb . " " . $prov . " " . $cat . "<br>";

			/*echo "<table><tr>";
			echo "<td>$cod</td>";
            echo "<td>$nomb</td>";
            echo "<td>$prov</td>";
            echo "<td>$cat</td>";
            echo "</tr></table>";﻿*/

		}

		mysqli_stmt_close($result);

	}

?>

</body>
</html>