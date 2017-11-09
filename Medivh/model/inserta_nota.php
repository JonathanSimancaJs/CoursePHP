<?php

  if(isset($_POST["agregar_nota"])){

      require_once("conexion.php");

      $base=Conectar::conexion();

      $coment=$_POST["comentario"];
      $caso=$_POST["idcaso"];
      $asesor=$_POST["idasesor"];

      if ($coment=='') {
        echo "<script>
          error_01()
        </script>
        ";
        exit();
      }      

      $sql="INSERT INTO NOTAS (NotDescripcion,IdTicketNot,IdAsesorNot) VALUES (:1,:2,:3)";

      $resultado=$base->prepare($sql);

      $resultado->execute(array(":1"=>$coment,":2"=>$caso,":3"=>$asesor));

      echo "<h3 class='titulo'>Nota agregada</h3>";
      
  }

?>