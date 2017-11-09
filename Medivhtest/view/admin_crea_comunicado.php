<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/smain.css">
	<link rel="stylesheet" href="../css/btns.css">
	<script src="../js/scripts.js"></script>
</head>
<body>
<div id="ContenedorMenu">
	<?php

	$opciona="miBoton";
	$opcionb="miBoton";

	$menuLinkid=basename($_SERVER['PHP_SELF'],".php");

		if($menuLinkid=="admin_controler_1"){

			$opciona='ActivaBoton';

		}else if($menuLinkid=="admin_controler_1_1"){

			$opcionb='ActivaBoton';
		}
	 ?>
	 <a class="<?php echo $opciona; ?>" href="../controler/admin_controler_1.php">Comunicados</a>
	 <a class="<?php echo $opcionb; ?>" href="../controler/admin_controler_1_1.php">Nuevo Comunicado</a>
</div>
<div id="CuerpoContenedor">
	<div id="ContenedorInterior">
		<h2>Nueva entrada</h2>
			<form action="../model/nuevo_comunicado.php" method="post">
				<table >
					<tr>
						<td>Título: 
							<label for="campo_titulo"></label>
						</td>
						<td>
							<input type="text" name="campo_titulo" id="campo_titulo">
						</td>
					</tr>
					<tr>
						<td>Comentarios: 
							<label for="area_comentarios"></label>
						</td>
						<td>
							<textarea name="area_comentarios" id="area_comentarios" rows="10" cols="50"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="btn_enviar" id="saveb" value="Publicar">
						</td>
					</tr>
				</table>
			</form>
	</div>
</div>
</body>
</html>