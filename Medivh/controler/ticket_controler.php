<?php

	/*Este archivo intermedia la creacion del ticket entre la pagina del empleado y los archivos modelo de creacion de ticket*/

	include_once("../model/ticket_modelo.php");
	include_once("../model/maneja_ticket.php");

	try{

		$miconexion=new PDO('mysql:host=localhost; dbname=MEDIVH', 'root', 'tatan');

		$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	/* Si el empleado desea cargar alguna imagen aqui se manejan las exepciones de errores. */	

	if($_FILES["imagen"]["error"]){

		switch ($_FILES["imagen"]["error"]) {
			
			case 1:
				
				echo "El tamaño de la imagen exede lo permitido por el servidor.<br/>";

				break;

			case 2:

				echo "El tamaño de la imagen exede 2 MB<br/>";

				break;

			case 3:

				echo "EL envío de la imagen se interrumpio<br/>";

				break;

			case 4:

				echo "No se ha seleccionado imagen<br/>";

				break;
		}
	}else{

		echo "La imagen se ha subido correctamente" . "<br/>";

		if((isset($_FILES["imagen"]["name"]) && ($_FILES["imagen"]["error"]==UPLOAD_ERR_OK))){

			$destino_ruta="../media/";

			move_uploaded_file($_FILES["imagen"]["tmp_name"],$destino_ruta . $_FILES["imagen"]["name"]);

			echo "El archivo" . $_FILES["imagen"]["name"] . " Se ha copiado en el directorio de imágenes";

		}else{

			echo "La imagen no se ha podido copiar.";
		}
	}

	/* Desde aqui se llama al metodo que contiene la extructura principal del ticket para su creación, si el empleado deja campos vacios el ticket no se crea. */

	$Manejo_Tickets=new Manejo_Tickets($miconexion);

	$ticket=new Ticket_Modelo();

	if ($_POST["campo_titulo"]=='' || $_POST["area_comentarios"]=='') {
		echo "No se ha podido crear la solicitud, debe llenar los campos del formulario.<br/>";
		exit();
	}

	$ticket->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]), ENT_QUOTES));

	$ticket->setFecha(Date("Y-m-d H:i:s"));

	$ticket->setComentario(htmlentities(addslashes($_POST["area_comentarios"]), ENT_QUOTES));

	$ticket->setImagen($_FILES["imagen"]["name"]);

	$ticket->setUsuario(htmlentities(addslashes($_POST["usuario_oculto"]), ENT_QUOTES));

	$Manejo_Tickets->creaNuevoTicket($ticket);

	echo "<br/> Se solicitud ha sido enviada<br/>";

}catch(Exception $e){

	die("Error: " . $e->getMessage());
}

	

?>