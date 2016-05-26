<?php
session_start();
	include ("../conexion/conexion.php");
	$sql="SELECT * FROM `tbl_usuario` WHERE tbl_usuario.usu_email='$_SESSION[mail]'";
	$sql2="SELECT * FROM tbl_juego INNER JOIN tbl_usuario ON tbl_usuario.usu_email=tbl_juego.usu_emailP WHERE usu_email='$_SESSION[mail]'";
	$datos2 = mysqli_query($con, $sql2);
?>
<div class="container">
            <div class="box first">
                        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="center">
            <?php
            //consulta de datos según el filtrado
              $datos = mysqli_query($con,$sql);
                while ($mostrar = mysqli_fetch_array($datos)) {
            ?>
                    	<!-- Nick usuario -->
						<h2><?php echo utf8_encode($mostrar['usu_nick']); ?></h2>
						<div>
							<!-- Foto usuaro usuario -->
							<div>
							<?php
					 		if(!empty($mostrar['usu_foto'])){
        						$fichero="./images/media/$mostrar[usu_foto]";
        						echo"</br><img  src='$fichero'>";
    						}else{
                                $fichero2="./images/media/avatar.jpg";
                                echo"</br><img  src='$fichero2'>";
    						}
							?>
							</div>
						</div>
						<div> <?php echo $mostrar['usu_nombre'];  ?> </div>
						<div> <?php echo $mostrar['usu_apellido']; ?> </div>
						<div> <?php echo $mostrar['usu_email'];  ?> </div>
						<div id="respuesta">
            			</div>
					</div><!--/.center-->
					<div class="overlay">
                        <!--Mediante on onclick, se pasa a la función juegos la variable id_juegos, que esta redirige a la página de perfiljuego -->
                        <!---<a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" onclick="modificar(<?php echo $mostrar['usu_email'];?>);">Modificar perfil</a> -->
                        <a <?php echo "<input type='button' id='idUsuChat' onclick=modificar('$mostrar[usu_email]')"; ?> >Modificar perfil</i></a>
                    </div>
            	</div><!--/.col-md-4-->
				<?php
                    }


                ?>
        	</div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->

        <div class="container">
   <div class="box">
       <div class="center gap">
           <h2>Mis Juegos: </h2>
       </div><!--/.center-->
       <div class="row">
            <ul class="portfolio-items col-4">
             <?php
                //si se devuelve un valor diferente a 0 (hay datos)
                if(mysqli_num_rows($datos2)!=0){
                    while ($mostrarjuego = mysqli_fetch_array($datos2)) {
                ?>

           				<li class="portfolio-item apps">
                			<div class="item-inner">
                    			<div class="portfolio-image">
                                    <?php
                                      if ($mostrarjuego['jue_foto']==""){
                                        ?>
                                      <img class="img-responsive" src="./images/juegos/thumb/juego.png" alt="">
                                      <?php
                                    }else{
                                      ?>
                                      <img class="img-responsive" src="./images/juegos/thumb/<?php echo $mostrarjuego['jue_foto'];?>" alt="">
                                      <?php
                                    }
                                    ?>      
                        			<div class="overlay">
                                    <!--Mediante on onclick, se pasa a la función juegos la variable id_juegos, que esta redirige a la página de perfiljuego -->
                            			<a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" onclick="juegos(<?php echo $mostrarjuego['id_juegos'];?>);"><i class="unhide icon"></i></a>
                        			</div>
                    			</div>
                				<h5><?php echo utf8_encode($mostrarjuego['jue_nombre']); ?></h5>
                			</div>
            			</li><!--/.portfolio-item-->
                <?php
                    }
                }
                ?>

       		</ul>
       </div><!-- End row -->
   </div><!--/.box-->
</div><!--/.container-->
<script src="../js/contenido_web.js"></script>
