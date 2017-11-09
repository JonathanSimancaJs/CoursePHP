<?php

  require_once("conexion.php");

  $base=Conectar::conexion();

  
  if(isset($_POST["cr"])){

      $IdAse=$_POST["id"];
      $AseNom=$_POST["nom"];
      $AseCorr=$_POST["corr"];
      $AseCont=$_POST["cont"];
      $AseAre=$_POST["are"];
      $AsePer=$_POST["per"];

      if ($IdAse=='') {
        echo "<script>
          error_01()
        </script>
        ";
        exit();
      }      

      $pass_cif=password_hash($AseCont,PASSWORD_DEFAULT,array("cost"=>10));

      $sql="INSERT INTO ASESOR (IdAsesor,AseNombre,AseCorreo,AseContra,IdAreaAse,IdPermisoAse) VALUES (:1,:2,:3,:4,:5,:6)";

      $resultado=$base->prepare($sql);

      $resultado->execute(array(":1"=>$IdAse,":2"=>$AseNom,":3"=>$AseCorr,":4"=>$pass_cif,":5"=>$AseAre,":6"=>$AsePer));

      header("Location:../controler/admin_controler_3.php");
  }


?>