<?php
session_start();
	include ("../conexion/conexion.php");

?>
<div class="container">
            <div class="box first">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <form id="form_Juego" method="POST" action="#form_Juego" enctype="multipart/form-data">
							<h2>Subida Juego</h2>
							<div>
							<!-- nombre juego -->
							

							

								<label>Nombre Juego: </label>
								<div>
									<input id="juego" name="juego" type="text" maxlength="50" size="30" value=""/>
									<span id="error_juego_vacio" class="error"></span>
								</div>
								<!-- genero juego -->
								
								<label><input id="buscarBD" name="buscarBD" type="hidden" value="" /></label>
					
								<div>
									<input type="file" name="imagen" id="imagen"/>

								</div>


								Plataforma
								<?php
									$sqlPlataforma="SELECT * FROM tbl_plataforma";
									$plat = mysqli_query($con, $sqlPlataforma);
									
								?>
								<div>
									<select name="plataforma">					
										<?php						
																	
											while($plataforma=mysqli_fetch_array($plat)) {							
												echo utf8_encode("<option value=\"$plataforma[id_plataforma]\">$plataforma[pla_nombre]</option>");
											}
										?>
									</select>
									
								</div>


								Genero
								<?php
								
									$sqlGenero="SELECT * FROM tbl_genero";
									$gen = mysqli_query($con, $sqlGenero);
									
								?>
								<div>
									<select name="genero">					
										<?php						
																	
											while($generos=mysqli_fetch_array($gen)) {							
												echo utf8_encode("<option value=\"$generos[id_genero]\">$generos[gen_nombre]</option>");
											}
										?>
									</select>
									
								</div>
				

								<!-- BOTON DE ENVIAR -->
								<input type="button" name="submit" value="Insertar" onclick="return validaFormularioJuego();" />
								
							</div>
							</form>
							<div id="respuesta">


                        </div>
                    </div><!--/.col-md-4-->
                    
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->


