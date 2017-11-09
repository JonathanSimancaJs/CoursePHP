<!DOCTYPE html>
<html>
<head>
	<title>Busca Asesor</title>
    <link rel="stylesheet" href="../css/btns.css">
    <link rel="stylesheet" href="../css/smain.css">
    <link rel="stylesheet" href="../css/linkspag.css">
    <link rel="stylesheet" href="../css/tables.css">
    <script src="../js/scripts.js"></script>
    <style type="text/css">

        .titulo{
            text-shadow: 1px 2px 3px #666;
            text-align: left;
        }
        
    </style>
</head>
<body>

<?php

	$idcaso=$_GET["id"];
    $idasesor=$_GET["ase"];

?>

<h3 class="titulo">Agregar nueva nota a la SS<?php echo $idcaso; ?></h3>
    <form method="post">
    <table class="tshowtick">
    	<tr>
    		<td colspan="2">Tarea Realizada</td>
    	</tr>
    	<tr>
            <input type="hidden" name="idcaso" value="<?php echo $idcaso; ?>">
            <input type="hidden" name="idasesor" value="<?php echo $idasesor; ?>">
    		<td><textarea name="comentario" rows="5" cols="80"></textarea></td>
            <td><input id="saveb" type="submit" name="agregar_nota" value="Guardar"></td>
    	</tr>
        <tr>
            <td colspan="2"><input id="saveb" type="button" value="Cerrar" onclick="cerrar_this()"></td>
        </tr>
    </table>
    </form>

<?php
    
    include("../model/inserta_nota.php");

?>

</body>
</html>