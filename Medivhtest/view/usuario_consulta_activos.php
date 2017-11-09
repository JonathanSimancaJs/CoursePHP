<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/smain.css">
	<link rel="stylesheet" href="../css/linkspag.css">
    <link rel="stylesheet" href="../css/tables.css">
</head>
<body>
<div id="ContenedorMenu">
	<?php

	$opciona="miBoton";
	$opcionb="miBoton";

	$menuLinkid=basename($_SERVER['PHP_SELF'],".php");

		if($menuLinkid=="usuario_controler_2"){

			$opciona='ActivaBoton';

		}

	 ?>
	 <a class="<?php echo $opciona; ?>" href="../controler/usuario_controler_2.php">Activos</a>
</div>
<div id="CuerpoContenedor">
	<div id="ContenedorInterior">
    <table class="tdatos">
      <tr>
        <td>No Activo</td>
        <td>Serial</td>
        <td>Modelo</td>
        <td>Licencia</td>
        <td>Categoría</td>
        <td>Procesador</td>
        <td>Memoria</td>
        <td>Hardware</td>
        <td>Software</td>
      </tr>
    <?php
      include("../model/usuario_busca_activos.php");
    ?>
    </table>
	</div>
</div>

</body>
</html>