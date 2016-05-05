<?php
	include ("../conexion/conexion.php");
	$sql = "INSERT INTO tbl_mensajes (mens_mensaje,id_chat,usu_email) VALUES ('$_REQUEST[textoIns]',1,'aitor.blesa@fje.edu')";

	$datos = mysqli_query($con, $sql);
	
?>