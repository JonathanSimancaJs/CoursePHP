<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/smain.css">
	<link rel="stylesheet" href="../css/linkspag.css">
</head>
<body>
<div id="ContenedorMenu">
	<?php

	$opciona="miBoton";
	$opcionb="miBoton";

	$menuLinkid=basename($_SERVER['PHP_SELF'],".php");

		if($menuLinkid=="usuario_controler_1"){

			$opciona='ActivaBoton';

		}else if($menuLinkid=="usuario_controler_1_1"){

			$opcionb='ActivaBoton';
		}
	 ?>
	 <a class="<?php echo $opciona; ?>" href="../controler/usuario_controler_1.php">Abrir SS</a>
	 <a class="<?php echo $opcionb; ?>" href="../controler/usuario_controler_1_1.php">Mis SS</a>
</div>
<div id="CuerpoContenedor">
	<div id="ContenedorInterior">

<h2>Nueva Solicitud de Servicio</h2>
	<form action="../controler/ticket_controler.php" method="post" enctype="multipart/form-data" name="form1">
		<table >
			<tr>
  				<td>Asunto: 
    				<label for="campo_titulo">
    				</label>
    			</td>
    			<td>
    				<input type="text" name="campo_titulo" id="campo_titulo">
    			</td>
    		</tr>
  			<tr>
  				<td>Contenido:
            <label for="area_comentarios"></label>
    			</td>
    			<td>
    				<textarea name="area_comentarios" id="area_comentarios" rows="10" cols="50"></textarea>
    			</td>
    		</tr>
  			<tr>
  				<br>
  				<td colspan="2">Seleccione una imagen con tamaño inferior a 2 MB
  				</td>
  			</tr>
  			<tr>
    			<td colspan="2" align="left">
    				<input type="file" name="imagen" id="imagen">
    			</td>
    		</tr>
        <tr>
          <td>
            <input type="hidden" name="usuario_oculto" value="<?php echo $ususess;?>">
          </td>
        </tr>

    		<tr>
    			<td colspan="2" align="center">  
    				<input type="submit" name="btn_enviar" id="btn_enviar" value="Crear">
    			</td>
    		</tr>
  		</table>
	</form>

	</div>
</div>

</body>
</html>