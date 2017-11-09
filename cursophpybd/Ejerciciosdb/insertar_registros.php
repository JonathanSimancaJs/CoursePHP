<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

h1{
	text-align:center;
	color:#00F;
	border-bottom:dotted #0000FF;
	width:50%;
	margin:auto;
	
	
}

table{
	border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
}

body{
	background-color:#FFC;
}


</style>
</head>

<body>
<h1>Registro de Artículos</h1>
<form name="form1" method="get" action="insertar.php">
  <table border="0" align="center">
    <tr>
      <td>Codigo Producto</td>
      <td><label for="c_prod"></label>
      <input type="text" name="c_prod" id="c_prod"></td>
    </tr>
    <tr>
      <td>Nombre Producto</td>
      <td><label for="Nomprod"></label>
      <input type="text" name="Nomprod" id="Nomprod"></td>
    </tr>
    <tr>
      <td>Proveedor</td>
      <td><label for="prov"></label>
      <input type="text" name="prov" id="prov"></td>
    </tr>
    <tr>
      <td>Categoría</td>
      <td><label for="cat"></label>
      <input type="text" name="cat" id="cat"></td>
    </tr>
    <tr>
      <td>Cantidad Por Unidad</td>
      <td><label for="cant_unid"></label>
      <input type="text" name="cant_unid" id="cant_unid"></td>
    </tr>
    <tr>
      <td>Precio Unidad</td>
      <td><label for="pre_unid"></label>
      <input type="text" name="pre_unid" id="pre_unid"></td>
    </tr>
    <tr>
      <td>Unidades en Existencia</td>
      <td><label for="unid_exis"></label>
      <input type="text" name="unid_exis" id="unid_exis"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</body>
</html>