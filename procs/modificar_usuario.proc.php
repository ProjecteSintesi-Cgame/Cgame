<?php

	session_start();
	    if(isset($_SESSION['mail'])){
    	include("conexion/conexion.php");

		$sql = "UPDATE tbl_usuario SET usu_nombre='$nom', usu_apellido='$ape', usu_contra='$pass' WHERE usu_email='$_SESSION[mail]'";
		//UPDATE tbl_usuario SET usu_nombre='Xavier', usu_apellido='Granell', usu_contra='81dc9bdb52d04dc20036dbd8313ed055' WHERE usu_email='xavi.granell@fje.edu'
		
		echo $sql;

		//lanzamos la sentencia sql
		//$datos = mysqli_query($con, $sql);
	}

	header("location: ../verperfil.php");

?>
