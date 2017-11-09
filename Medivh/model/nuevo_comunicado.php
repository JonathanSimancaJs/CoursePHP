<?php

  require_once("conexion.php");

  $base=Conectar::conexion();

  
  if(isset($_POST["btn_enviar"])){

      $Titulo=$_POST["campo_titulo"];
      $Texto=$_POST["area_comentarios"];

  if ($Titulo=='' || $Texto=='') {
        header("Location:../controler/admin_controler_1_1.php");
        exit();
  } 

      $sql="INSERT INTO COMUNICADOS (ComTitulo,ComTexto) VALUES (:1,:2)";

      $resultado=$base->prepare($sql);

      $resultado->execute(array(":1"=>$Titulo,":2"=>$Texto));
  }

  header("Location:../controler/admin_controler_1_1.php");

?>