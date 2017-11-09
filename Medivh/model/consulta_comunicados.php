<?php

	$miconexion=mysqli_connect("localhost","root","tatan","MEDIVH");

	if(!$miconexion){

		echo "La conexión ha fallado: " . mysqli_error();
		exit();
	}

	mysqli_set_charset($miconexion, "utf8");

	require("paginacion_comunicado.php");

	$sql=("SELECT * FROM COMUNICADOS ORDER BY ComFecha DESC LIMIT $empezar_desde,$tamano_paginas");

	if($resultado=mysqli_query($miconexion,$sql)){

		while ($registro=mysqli_fetch_assoc($resultado)) {
			
			echo "<h3>" . $registro["ComTitulo"] . "</h3>";
			echo "<h4>" . $registro["ComFecha"] . "</h4>";
			echo "<div style='width:400px'>" . $registro["ComTexto"] . "</div><br/><br/>";
			echo "<hr/>";

		}

		for($i=1; $i<=$total_paginas; $i++){

            echo "<a id='pag' href='?pagina=" . $i . "'>" . $i . "</a>  ";

          }
	}


?>