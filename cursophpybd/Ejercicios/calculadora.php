<style>
.resultado{
	color: #F00;
	font-weight: bold;
	font-size: 32px;
}

</style>



<?php


	if(isset($_POST["button"])){

    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $operacion=$_POST["operacion"];

    calcular($operacion);
  }
	
	function calcular($calculo){

		if(!strcmp("Suma",$calculo)){
			global $numero1;
			global $numero2;

			$resultado=$numero1+$numero2;

			echo "<p class='resultado'> EL resultado es: $resultado</p>";
		}

		if(!strcmp("Resta",$calculo)){
			global $numero1;
			global $numero2;

			echo "EL resultado es: " . ($numero1-$numero2);
		}

		if(!strcmp("Multiplicación",$calculo)){
			global $numero1;
			global $numero2;

			echo "EL resultado es: " . ($numero1*$numero2);
		}

		if(!strcmp("División",$calculo)){
			global $numero1;
			global $numero2;

			echo "EL resultado es: " . ($numero1/$numero2);
		}

		if(!strcmp("Módulo",$calculo)){
			global $numero1;
			global $numero2;

			echo "EL resultado es: " . ($numero1%$numero2);
		}

		if(!strcmp("Incremento",$calculo)){
			global $numero1;
			//global $numero2;
			$numero1++;

			$resultado=$numero1;

			echo "<p class='resultado'> EL resultado es: $resultado</p>";
		}

		if(!strcmp("Decremento",$calculo)){
			global $numero1;
			//global $numero2;
			$numero1--;

			$resultado=$numero1;

			echo "<p class='resultado'> EL resultado es: $resultado</p>";
		}
	}

?>