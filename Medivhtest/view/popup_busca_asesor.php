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

$valor="selected";

if(isset($_GET["enviar"])){

    if($_GET{"seleccion"}==2){

        $qq="IdAsesor";

    }else

        $qq="AseNombre";
}

?>

<h3 class="titulo">Buscar Asesores</h3>
    <form id="form1" name="form1" method="get" action="?">
        <label for="seleccion"></label>
            <select name="seleccion" id="seleccion" class="campos">
                <option value="1">Por Nombre</option>
                <option value="2" <?php echo $valor; ?>>Por Id</option>
            </select>
        <label for="q"></label>
        <input type="text" name="q" id="q" class="campos" />
        <input type="submit" name="enviar" id="saveb" value="Buscar" />
    </form>

<FORM onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_ContentPlaceMain_btnBuscar&#39;)">

    <table class="tshowtick">
        <tr class="">
            <td width="20">#</td>
            <td width="70">Id Asesor</td>  
            <td width="240">Nombre</td>
            <td width="240">Correo</td>
            <td width="80">Area</td>
        </tr>
<?php

    include("../model/busca_asesor.php")

?>
    </table>
</FORM>

</body>
</html>