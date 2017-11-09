<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	$cod=$_POST["c_prod"];

  try{

  $base=new PDO ('mysql:host=localhost; dbname=escuela', 'root','tatan');

  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  $base->exec("SET CHARACTER SET utf8");

  $sql="delete from PRODUCTOS where IdProducto=:m_cod";

  $resultado=$base->prepare($sql);

  $resultado->execute(array("m_cod"=>$cod));

      echo "Registro Eliminado";

  		$resultado->closeCursor();

  }catch(Exception $e){

        //echo ('Error: ' . $e->GetMessage());
  		echo "Linea del error: " . $e->getLine();

  }finally{

      $base=null;
  }




?>

</body>
</html>