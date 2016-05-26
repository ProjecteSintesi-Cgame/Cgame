<?php
session_start();
include ("../conexion/conexion.php");

$sql="SELECT * FROM `tbl_usuario` WHERE tbl_usuario.usu_email='$_SESSION[mail]'";
	//$sql1 = "UPDATE tbl_usuario SET usu_nombre='$nom', usu_apellido='$ape', usu_contra='$pass' WHERE usu_email='$_SESSION[mail]'";
		//UPDATE tbl_usuario SET usu_nombre='Xavier', usu_apellido='Granell', usu_contra='81dc9bdb52d04dc20036dbd8313ed055' WHERE usu_email='xavi.granell@fje.edu'

?>
<div class="container">
	<div class="box first">
		<div class="row">

			<!-- PARTE DONDE SE VA A MOSTRAR LA INFORMACIÓN -->
			<?php
            //consulta de datos según el filtrado
			$datos = mysqli_query($con, $sql);
			if(mysqli_num_rows($datos)>0){
				$mostrar=mysqli_fetch_array($datos);

				?>
				<div class="col-md-4 col-sm-6">
					<div class="center">
						<form id="form_Juego" method="POST" action="modificar_usuario.proc.php" onsubmit="return validaFormulario();" enctype="multipart/form-data">
							<h2>Modificar tu perfil:</h2>

							<div class="two fields">
								<div class="field">
									<!-- APODO O NICKNAME DEL USUARIO -->
									<label>Nick: </label>
									<input id="nombre" name="nom"  maxlength="30" size="30" value="<?php echo utf8_encode($mostrar['usu_nick']);?>"/>
									<span id="error_nombre"></span>
								</div>
								<div class="field">
									<!-- NOMBRE DEL USUARIO -->
									<label>Nombre: </label>
									<input id="nombre" name="nom"  maxlength="30" size="30" value="<?php echo utf8_encode($mostrar['usu_nombre']);?>"/>
									<span id="error_nombre"></span>
								</div>
								<div class="field">
									<!-- APODO O NICKNAME DEL USUARIO -->
									<label>Apelido: </label>
									<input id="apellido" name="ape"  maxlength="30" size="30" value="<?php echo utf8_encode($mostrar['usu_apellido']);?>"/>
									<span id="error_apellido"></span>
								</div>

							</div>
							<div class="two fields">
								<div class="field">
									<!-- CONTRASEÑA DEL USUARIO -->
									<label>Nueva contraseña:</label>
									<input id="contrasena" name="pass" type="password"/>
									<span id="error_contrasena_vacio" class="error"></span>
								</div>
								<div class="field">
									<!-- CONFIRMACIÓN CONTRASEÑA DEL USUARIO -->
									<label>Confirmar nueva contraseña:</label>
									<input id="confirmar_contrasena" name="confirmar_contrasena" type="password"/>
									<span id="error_confirmar_contrasena_vacio" class="error"></span>
									<span id="error_confirmar_contrasena_incorrecto" class="error"></span>
								</div>

								<!-- CAMBIAR IMAGEN DE PERFI -->

								<div>
									<label>Cambiar foto de perfil: </label>
									<input type="file" name="imagen" id="imagen"/>

								</div>
							</div>
							<!-- BOTON DE ENVIAR -->
							<input type="submit" name="submit" value="Enviar" />
						</form>
						<div id="respuesta">


						</div>
					</div><!--/.col-md-4-->
					
				</div><!--/.row-->
			</div><!--/.box-->

			<?php
		}
		?>
	</div><!--/.container-->

<script type="text/javascript" src="./js/validaModificar.js"></script>

