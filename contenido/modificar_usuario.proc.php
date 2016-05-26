<?php

	session_start();
	    if(isset($_SESSION['mail'])){
    	include("conexion/conexion.php");

		//$sql = "UPDATE tbl_usuario SET usu_nombre='$nom', usu_apellido='$ape', usu_contra='$pass' WHERE usu_email='$_SESSION[mail]'";
		//UPDATE tbl_usuario SET usu_nombre='Xavier', usu_apellido='Granell', usu_contra='81dc9bdb52d04dc20036dbd8313ed055' WHERE usu_email='xavi.granell@fje.edu'

			$ruta = "../images/juegos/thumb".$_SESSION['mail']."_".$_FILES['imagen']['name'];
			$imagen=$_SESSION['mail']."_".$_FILES['imagen']['name'];
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			$sql = "UPDATE tbl_usuario SET usu_nombre='$nom', usu_apellido='$ape', usu_contra='$pass' WHERE usu_email='$_SESSION[mail]'";
			$datos = mysqli_query($con, $sql);
			
		}

	$correcto="Se ha modificado su perfil correctamente";
	echo $correcto;

?>
