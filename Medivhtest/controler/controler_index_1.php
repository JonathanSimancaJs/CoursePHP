<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		body{
			font-size: 15px;
			font-family: sans-serif;
			background: #ecf9b2;
		}

		.plogin{
			margin-left: 30%;
			margin-top: 10%;
		}
		
		.plogin {
		     width: 700px;
		     height: 300px;
		     -moz-border-radius: 0 50% / 0 100%;
		     -webkit-border-radius: 0 50% / 0 100%;
		     border-radius: 0 50% / 0 100%;
		     background: #5cb85c;
		     border: 3px solid #555;
		}

	</style>
</head>
<body>

<!--
	Este archivo carga el login de inicio de sescion y lo conecta con el idex, pero solo en caso de que el usuario haya intentado logearse de forma erronea.
-->

<div class="plogin" align="center">
	<?php
	include("../view/error_inicio_sesion.php")
	?>
</div>

</body>
</html>
