on
<?php
session_start();
include ("../conexion/conexion.php");

	//$sql="SELECT DISTINCT * FROM tbl_juego INNER JOIN tbl_usuario ON tbl_usuario.usu_email=tbl_juego.usu_emailP WHERE usu_emailP='$_SESSION[mail]'";
	//echo $sql;
    $sql="SELECT DISTINCT usu_nick, usu_foto, usu_email FROM tbl_juego INNER JOIN tbl_usuario ON tbl_usuario.usu_email=tbl_juego.usu_emailP WHERE usu_emailP='$_REQUEST[usu_emailP]'"; //usu_emailP='$mostrar[usu_emailP]'
    $sql2="SELECT * FROM tbl_juego INNER JOIN tbl_usuario ON tbl_usuario.usu_email=tbl_juego.usu_emailP WHERE usu_emailP='$_REQUEST[usu_emailP]'"; //usu_emailP='$mostrar[usu_emailP]'
    $sql3="SELECT DISTINCT usu_lat, usu_long FROM tbl_usuario INNER JOIN tbl_juego ON tbl_usuario.usu_email=tbl_juego.usu_emailP WHERE usu_emailP='$_REQUEST[usu_emailP]'";

    $datos = mysqli_query($con, $sql);
    $datos2 = mysqli_query($con, $sql2);
    $datos3 = mysqli_query($con, $sql3);


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
                    $fichero="./images/media/$mostrar[usu_foto]";
                    echo"</br><img  src='$fichero'>";
                  }else{
                    $fichero2="./images/media/avatar.jpg";
                    echo"</br><img  src='$fichero2'>";
                  }
                  ?>
                </div>

                <?php


                if(mysqli_num_rows($datos3)!=0){
                  while ($pro = mysqli_fetch_array($datos3)) {

                    ?>

                    <script>

                    inicializar();
                    function inicializar(){
                      var myLatlng = new google.maps.LatLng(<?php echo $pro['usu_lat']; ?>,<?php echo $pro['usu_long']; ?>);
                      var mapOptions = {
                        zoom:12,
                        center: myLatlng,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      }
                      mapa = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

                      var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: mapa,
                        title:"El usuario esta aquí"
                      });

                    }

                    </script>



                    <div id="map_canvas" class="map"></div>
                    <div class="overlay">



                      <?php
                    }
                  }

                  if ($mostrar['usu_email'] != $_SESSION['mail']) {
                       echo '<a href="contenido/crearChat.proc.php?usuM='.$mostrar['usu_email'].'">Chat</a>';
                  }



                  ?>
                </div>
              </div>
              <div id="respuesta">
              </div>
            </div><!--/.center-->
          </div><!--/.col-md-4-->
          <?php
        }
      }

      ?>
    </div><!--/.row-->
  </div><!--/.box-->
</div><!--/.container-->


<div class="container">
 <div class="box">
   <div class="center gap">
     <h2>Juegos del usuario: </h2>
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
              <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" onclick="juegos(<?php echo $mostrarjuego['id_juegos'];?>);"><i class="icon-eye-open"></i></a>
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

<script src="../js/bootstrap.min.js"></script>
