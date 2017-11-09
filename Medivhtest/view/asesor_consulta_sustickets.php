<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/smain.css">
	<link rel="stylesheet" href="../css/linkspag.css">
  <link rel="stylesheet" href="../css/tables.css">
</head>
<body>
<?php

  require("../model/paginacion_asesor_tickets.php");

?>
<div id="ContenedorMenu">
	<?php

	$opciona="miBoton";
	$opcionb="miBoton";

	$menuLinkid=basename($_SERVER['PHP_SELF'],".php");

		if($menuLinkid=="asesor_controler_1"){

			$opciona='ActivaBoton';

		}else if($menuLinkid=="asesor_controler_1_1_1"){

			$opcionb='ActivaBoton';
		}
	 ?>
	 <a class="<?php echo $opciona; ?>" href="../controler/asesor_controler_1.php">Cola SS</a>
	 <a class="<?php echo $opcionb; ?>" href="../controler/asesor_controler_1_1_1.php">Mis SS</a>
</div>
<div id="CuerpoContenedor">
	<div id="ContenedorInterior">
  <table class="tdatos" align="left">
    <tr>
      <td>Número de SS</td>
      <td>Fecha Creado</td>
      <td>Asunto</td>
      <td>Estado</td>
      <td>Asesor</td>
    </tr>
      <?php

      if(empty($registros)){

        echo "<h3>No hay tickets asignados a su area</h3>";

      }else{

        foreach ($registros as $valor) {
          
          $idtick=$valor->getId();

        echo ("
            <tr>
              <td><a id='pag' href='../controler/asesor_controler_1_1.php?tick=$idtick' method='post'>" ."SS" . $valor->getId() . "</a></td>
              <td>" . $valor->getFecha() . "</td>
              <td>" . $valor->getTitulo() . "</td>
              <td>" . $valor->getEstado() . "</td>
              <td>" . $valor->getAsesor() . "</td>
            </tr>");
          }

          for($i=1; $i<=$total_paginas; $i++){

            echo "<tr><td colspan='5'><a id='pag' href='?pagina=" . $i . "'>" . $i . "</a></td></tr>";
          }
        }

        ?>
    </table>    
	</div>
</div>

</body>
</html>