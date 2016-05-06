<?php
	session_start();
	//include("conexion/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>CGame</title>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="js/validaFormulario.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
	<body>
		<div>
		
			
			<form id="form_registro" method="GET" action="contenido/registro.proc.php" onsubmit="return validaFormulario();">
				<h2>Registro</h2>
				<div>
				<!-- CORREO ELECTRONICO DEL USUARIO -->
					<label>Correo Electrónico: </label>
					<div>
						<input id="correo" name="correo" type="text" maxlength="50" size="30" value=""/>
						<span id="error_correo_vacio" class="error"></span>
						<span id="error_correo_formato" class="error"></span>
					</div>
					<!-- CONTRASEÑA DEL USUARIO -->
					<label>Contraseña:</label>
					<div>
						<input id="pass" name="pass" type="password" value=""/>
						<span id="error_pass_vacio" class="error"></span>
					</div>
					<!-- CONFIRMACIÓN DEL USUARIO -->
					<label>Confirmar contraseña:</label>
					<div>
	    				<input id="confirmar_pass" type="password" />
	    				<span id="error_confirmar_pass_vacio" class="error"></span>
	    				<span id="error_confirmar_pass_incorrecto" class="error"></span>
					</div>
					<!-- Apodo O NICKNAME DEL USUARIO -->
					<label>nombre / Nickname: </label>
					<div>
						<input id="nombre" name="nombre"  maxlength="30" size="30" value=""/>
						<span id="error_nombre" class="error"></span>
					</div>

					<!-- APELLIDO DEL USUARIO -->
					<label>Apellido: </label>
					<div>
						<input id="apellido" name="apellido"  maxlength="30" size="30" value=""/>
						<span id="error_apellido" class="error"></span>
					</div>

					<!-- BOTON DE ENVIAR -->
					<input type="submit" name="submit" value="Registrarse" />
					<input type="button" onclick="location='login.php'" value="Atrás"/>
				</div>
			</form>
		</div>
		
	</body>
</html>