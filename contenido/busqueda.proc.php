<?php
	include ("../conexion/conexion.php");
	$sql = "SELECT * FROM tbl_juego INNER JOIN tbl_usuario ON tbl_juego.usu_emailP=tbl_usuario.usu_email WHERE UPPER(jue_nombre) LIKE  UPPER('%$_REQUEST[filtro]%') ORDER BY id_juegos ASC";

	

	$datos = mysqli_query($con, $sql);
	if(mysqli_num_rows($datos)){
		$juego = array();
		while ($jue = mysqli_fetch_array($datos)) {
			$usuario = $jue['usu_nick'];
			$jue_nombre = $jue['jue_nombre'];
			$jue_foto = $jue['jue_foto'];
			$id_juegos = $jue['id_juegos'];
			$email = $jue['usu_email'];
			$juego[] = array('usuario'=> $usuario, 'juego'=> $jue_nombre,'foto'=> $jue_foto,'id_juego'=>$id_juegos,'email'=>$email);

		}
	}else{
		$juego = null;
	}

	$json_str = json_encode($juego);
	echo $json_str;
?>
