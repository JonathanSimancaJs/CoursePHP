<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Documento sin título</title>
        <style>
			table{
				background-color:#FFC;
				border:1px solid #FF0000;
				margin:auto;
				padding:25px;
			}
		h1{
			width:50%;
			margin:25px auto;
			
			text-align:center;
			margin-bottom:50px;
		}
		
		body{
			background-color:#FC9;
		}
		
		#boton{
			padding-top:25px;
			
		}
		
		</style>
    </head>
    
    <body>
    <h1> Registro de nuevos productos</h1>
    
        <form action="insertar_registros.php" method="get">
        <table>
        <tr><td>
            <label>Codigo:</label></td><td> <input type="text" name="cod"></td></tr>
            <tr><td><label>Nombre:</label></td><td><input type="text" name="nomb"></td></tr>
          <tr><td>  <label>Proveedor:</label> </td><td><input type="text" name="prov"></td></tr>
          <tr><td>  <label>Categoría: </label></td><td><input type="text" name="cat"></td></tr>
           <tr><td> <label>Cantidad por unidad: </label></td><td><input type="text" name="cantunid"></td></tr>
           <tr><td> <label>Precio unidad:</label> </td><td><input type="text" name="preunid"></td></tr>
           <tr><td> <label>Unidades Existentes: </label></td><td><input type="text" name="unidexis"></td></tr>
          <tr><td colspan="2" align="center" id="boton">  <input type="submit" name="enviando" value="¡Guardar!"></td></tr>
        </table>
        </form>
    
    </body>
    
</html>