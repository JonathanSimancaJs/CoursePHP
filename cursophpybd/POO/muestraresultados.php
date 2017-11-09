<?php

	require "devuelveproductos.php";

	$productos=new DevuelveProductos();

	$array_productos=$productos->get_productos();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

</head>

<body>

<?php
	
	foreach ($array_productos as $elemento){


		echo "<table><tr><td>";

		echo $elemento['IdProducto'] . " </td><td>";
		echo $elemento['NombreProducto'] . " </td><td>";
		echo $elemento['Proveedor'] . " </td><td></tr></table>";

		echo "<br>";
		echo "<br>";
	}

	$conion_db->closeCursor();

?>

</body>
</html>