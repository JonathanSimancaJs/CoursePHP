<?php

require_once("conexion.php");

$base=Conectar::conexion();

$tamano_paginas=10;

  if(isset($_GET["pagina"])){

  if($_GET["pagina"]==1){

    header("Location:../controler/asesor_controler_1.php");

  }else{

    $pagina=$_GET["pagina"];

  }
  
}else{

  $pagina=1;
}
  
  $empezar_desde=($pagina-1)*$tamano_paginas;

  $sql_total=("SELECT * FROM TICKETS");

  $resultado=$base->prepare($sql_total);

  $resultado->execute(array());

  $num_registros=$resultado->rowcount();

  $total_paginas=ceil($num_registros/$tamano_paginas);

  ?>