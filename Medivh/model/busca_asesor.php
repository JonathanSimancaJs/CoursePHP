<?php

        if(isset($_GET['q'])){

        $contador=0;
        
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

        $busqueda=mysqli_real_escape_string($conexion,$_GET['q']);

        $query = "SELECT * FROM ASESOR WHERE ".$qq." LIKE '%".$busqueda."%' ";

        $resultados=mysqli_query($conexion,$query);
            
        while($fila=mysqli_fetch_array($resultados, MYSQLI_BOTH)) {

                $contador++;
                $codigo=$fila["IdAsesor"];
                echo "<tr OnMouseOver='Resaltar_On(this);' OnMouseOut='Resaltar_Off(this);' OnClick=datos('$codigo')>
                        <td>$contador</td>
                        <td>$codigo</td>
                        <td>".$fila["AseNombre"]."</td>
                        <td>".$fila["AseCorreo"]."</td>
                        <td>".$fila["IdAreaAse"]."</td>
                     </tr>";
          }
        }
?>