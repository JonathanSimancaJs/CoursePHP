<?php
	
	function ejecuta_consulta($labusqueda){

	$db_host="localhost";
	$db_nombre="MEDIVH";
	$db_usuario="root";
	$db_contra="tatan";

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(mysqli_connect_errno()){
		echo "Fallo al intentar conectar a la base de datos";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

	mysqli_set_charset($conexion, "utf8");

	$activo=array();

    if ($labusqueda=='') {
        echo "<script>
          error_01()
        </script>
        ";
        exit();
    }	

	$busqueda=mysqli_real_escape_string($conexion,$labusqueda);

	$sql="SELECT * FROM ACTIVO WHERE ActSerial LIKE '%$busqueda%'";

	$resultados=mysqli_query($conexion,$sql);

	while($fila=mysqli_fetch_array($resultados, MYSQLI_BOTH)){

		echo ("
			<form action='../model/actualiza_activo.php' method='post'>
			<table class='tbusqueda'><tr>
			<td><input type='text' name='id' id='id' value='"."SS".$fila["IdActivo"]."' readonly></td>
			<td><input type='text' name='sn' id='sn' value='".$fila["ActSerial"]."' readonly></td>
			<td><input list='estados' name='estados' id='est' value='".$fila["ActEstado"]."'>
			<datalist id='estados'>
			<option value='Asignado'>
			<option value='En Stock'>
			<option value='Prestamo'>
			<option value='Baja'>
			</datalist>
			</td>
			<td><input type='text' name='usu' id='usu' value='".$fila["IdUsuarioAct"]."'></td>
			<td><input type='submit' name='envia' id='saveb' value='Update'></td>
			</tr>
			</table>
			</form>
			");
	}

	mysqli_close($conexion);

}



?>