<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
  
  $conexion= new mysqli("localhost","root","tatan","escuela");

  if ($conexion->connect_errno){
    echo "Falló la conexión " . $conexion->connect_errno;
  }

  $conexion->set_charset("utf8");

  $sql="select * from PRODUCTOS";

  $resultados=$conexion->query($sql);

  if ($conexion->errno){
  	die($conexion->error);
  }

  while ($fila=$resultados->fetch_assoc()) {
  	
  	echo "<table><tr><td>";

	echo $fila['IdProducto'] . " </td><td>";
	echo $fila['NombreProducto'] . " </td><td>";
	echo $fila['Proveedor'] . " </td><td></tr></table>";

	echo "<br>";
	echo "<br>";
  }

  $conexion->close();

?>

</body>
</html>