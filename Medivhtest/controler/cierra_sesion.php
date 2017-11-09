<!--
	Este archivo es llamado de todas las paginas para cerrar la sesión del usuario.
-->

<?php

	session_start();

	session_destroy();

	header("location:../index.php");

?>