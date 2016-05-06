<?php
	session_start();
	include ("../conexion/conexion.php");
	$sql = "INSERT INTO tbl_juego (jue_nombre,id_genero,id_plataforma,usu_emailP) VALUES ('$_REQUEST[juego]',$_REQUEST[genero],$_REQUEST[plataforma],'$_SESSION[mail]')";
	

	$datos = mysqli_query($con, $sql);

	$respuesta="Su anuncio se ha insertado correctamente";
	echo $respuesta;
?>