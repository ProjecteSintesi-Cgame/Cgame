<?php
	include ("../conexion/conexion.php");
	$sql = "INSERT INTO tbl_mensajes (mens_mensaje,id_chat,usu_email) VALUES ('$_REQUEST[textoIns]','$_REQUEST[chat]','$_REQUEST[usu2]')";

	$datos = mysqli_query($con, $sql);
	
?>