<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modifica Activos</title>
<link rel="stylesheet" href="../css/smain.css">
<link rel="stylesheet" href="../css/btns.css">
<link rel="stylesheet" href="../css/tables.css">

<?php
	include("../model/busca_activos.php");
?>

</head>
<body>
<div id="ContenedorMenu">
  <?php

  $opciona="miBoton";
  $opcionb="miBoton";

  $menuLinkid=basename($_SERVER['PHP_SELF'],".php");

    if($menuLinkid=="asesor_controler_2"){

      $opciona='ActivaBoton';

    }else if($menuLinkid=="asesor_controler_2_1"){

      $opcionb='ActivaBoton';
    }

   ?>
   <a class="<?php echo $opciona; ?>" href="../controler/asesor_controler_2.php">Creación Activos</a>
   <a class="<?php echo $opcionb; ?>" href="../controler/asesor_controler_2_1.php">Modifica Activos</a>
</div>
<div id="CuerpoContenedor">
  <div id="ContenedorInterior">

<?php
	
	$mibusqueda='default';

	if(isset($_GET["enviando"])){

		$mibusqueda=$_GET["buscar"];

		ejecuta_consulta($mibusqueda);
	}

?>		
		<br>
		<form action='<?php echo $_SERVER['PHP_SELF'];?>' method='get'>
			<label>Buscar Serial:<input type='text' name='buscar'></label>
			<input type='submit' name='enviando' id='saveb' value='Buscar'>
		</form>

  </div>
</div>

</body>
</html>