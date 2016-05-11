<?php
	session_start();
	include ("../conexion/conexion.php");

	$sql="SELECT * FROM tbl_juego INNER JOIN tbl_usuario ON tbl_usuario.usu_email=tbl_juego.usu_emailP WHERE usu_emailP='$_SESSION[mail]'";
	//echo $sql;
	$datos = mysqli_query($con, $sql);


?>
<div class="container">
    <div class="box first">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="center">
                	<?php
            		//si se devuelve un valor diferente a 0 (hay datos)
            		if(mysqli_num_rows($datos)!=0){
                		while ($mostrar = mysqli_fetch_array($datos)) {
        			?>
                    	<!-- Nick usuario -->
						<h2><?php echo utf8_encode($mostrar['usu_nick']); ?></h2>
						<div>
							<!-- Foto usuaro usuario -->
							<label>Foto: </label>
							<div>
							<?php
					 		if(!empty($mostrar['usu_foto'])){
        						$fichero="media/images/$mostrar[usu_avatar]";
        						echo"</br><img  class='ui small center left circular floated image' src='$fichero'>";
    						}else{
        						echo"</br><img  src=../images/media/avatar.jpg>";
    						}
							?>
							</div>

							<!-- nombre usuario -->
							<label>Nombre Usuario: </label>
							<div>
								<?php echo utf8_encode($mostrar['usu_nombre']); ?>
							</div>
							<!-- nombre usuario -->
							<label>Apellido Usuario: </label>
							<div>
								<?php echo utf8_encode($mostrar['usu_apellido']); ?>
							</div>
						</div>
						<div id="respuesta">
            			</div>
					</div><!--/.center-->
            	</div><!--/.col-md-4-->
        	</div><!--/.row-->
    	</div><!--/.box-->
</div><!--/.container-->


<div class="container">
   <div class="box">
       <div class="center gap">
           <h2>Juegos de <?php echo utf8_encode($mostrar['usu_nick']); ?></h2>
       </div><!--/.center-->
       <div class="row">
            <ul class="portfolio-items col-4">
             <?php
                //si se devuelve un valor diferente a 0 (hay datos)
                if(mysqli_num_rows($datos)!=0){
                    while ($mostrarjuego = mysqli_fetch_array($datos)) {
                ?>

           				<li class="portfolio-item apps">
                			<div class="item-inner">
                    			<div class="portfolio-image">
                        			<img src="images/juegos/thumb/<?php echo $mostrar['jue_foto'];?>" alt="">
                        			<div class="overlay">
                            			<a onclick="perfil(<?php echo $mostrarjuego['usu_emailP'];?>);"><i class="icon-eye-open"></i></a>
                        			</div>
                    			</div>
                				<h5><?php echo utf8_encode($mostrarjuego['jue_nombre']); ?></h5>
                			</div>
            			</li><!--/.portfolio-item-->
                <?php
                    }
                }
							}
					}
                ?>

       		</ul>
       </div><!-- End row -->
   </div><!--/.box-->
</div><!--/.container-->
<script src="../js/contenido_web.js"></script>
