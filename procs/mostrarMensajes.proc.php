<?php
	include ("../conexion/conexion.php");
	$sql = "SELECT * FROM tbl_mensajes INNER JOIN tbl_usuario ON tbl_mensajes.usu_email=tbl_usuario.usu_email WHERE id_chat=1 ORDER BY id_mensaje ASC";

	$mensaje = array();

	$datos = mysqli_query($con, $sql);
	if(mysqli_num_rows($datos)){
		while ($mens = mysqli_fetch_array($datos)) {

		// echo "<div id='contenido'><div>";
		// 	echo "<img src='img/$mens[usuario].jpg' width='20%'><a href='#'><div id='sec'>$mens[comentario]</div></a>";
		// echo "</div><br></div>";
			
			$usuario = $mens['usu_nombre'];
			$mens_mensaje = $mens['mens_mensaje'];
			$mensaje[] = array('usuario'=> $usuario, 'mensaje'=> $mens_mensaje);

		}
	}

	$json_str = json_encode($mensaje);
	echo $json_str;
?>