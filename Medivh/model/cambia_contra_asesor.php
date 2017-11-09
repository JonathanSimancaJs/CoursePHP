<?php
	
	require_once("conexion.php");
  
	$base=Conectar::conexion();

  if(isset($_POST["bot_cambiar"])){

    $Idusu=$_POST["iduser"];
    $Old=$_POST["oldpass"];
    $New=$_POST["newpass"];
    $Conf=$_POST["confpass"];
    
    $sql="SELECT AseContra FROM ASESOR WHERE IdAsesor=:USER";

    $resultado=$base->prepare($sql);

    $resultado->execute(array(":USER"=>$Idusu));

    while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {

        if(password_verify($Old,$registro["AseContra"])){

            if($New==$Conf && $New!==''){

                $pass_cif=password_hash($New,PASSWORD_DEFAULT,array("cost"=>10));

                $sqlb="UPDATE ASESOR SET AseContra=:CONTRA";

                $resultadob=$base->prepare($sqlb);

                $resultadob->execute(array(":CONTRA"=>$pass_cif));

                echo "<h3 style='color:green;'>Se actualizo la contraseña.</h3>";

            }else{

                echo "<h3 style='color:red;'>La nueva contraseña no coinciden.</h3>";
            }
        }else{

        echo "<h3 style='color:red;'>La contraseña anterior no conincide.</h3>";
        }
    }
}



?>