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
	Este archivo carga la pagina de logina y la conecta con el Idex de la aplicación.
-->

<div class="plogin" align="center">
	<?php
	include("view/login.php")
	?>
</div>

</body>
</html>
