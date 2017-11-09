<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<style> 


</style>


</head>

<body>


<?php

	require("php/conex_db.php");

	$cod=$_GET["cod"];
	$nomb=$_GET["nomb"];
	$prov=$_GET["prov"];
	$cat=$_GET["cat"];
	$cantunid=$_GET["cantunid"];
	$preunid=$_GET["preunid"];
	$unidexis=$_GET["unidexis"];


	$query="insert into PRODUCTOS (idProducto, NombreProducto, Proveedor, Categoría, CantidadPorUnidad, PrecioUnidad, UnidadesEnExistencia) values (?,?,?,?,?,?,?)";

	$result=mysqli_prepare($conexion,$query);

	$ok=mysqli_stmt_bind_param($result, "issssdi", $cod,$nomb,$prov,$cat,$cantunid,$preunid,$unidexis);

	$ok=mysqli_stmt_execute($result);

	if($ok==false){
		echo "Error al ejecutar la consulta";
	}

	else{

	//$ok=mysqli_stmt_bind_result($result,$cod,$nomb,$prov,$cat);

		echo "Agregado nuevo registro:<br><br>";

		/*while(mysqli_stmt_fetch($result)){

			echo $cod . " " . $nomb . " " . $prov . " " . $cat . "<br>";

		}*/

		mysqli_stmt_close($result);

	}

?>

</body>
</html>