<?php
    session_start();
    include ("../conexion/conexion.php");
?>

<div class="container">
  <div class="box">
      <div class="center gap">
          <h2>Juegos</h2>
          <!-- <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac<br>turpis egestas. Vestibulum tortor quam, feugiat vitae.</p> -->
      </div><!--/.center-->
      <div class="row">
          <ul class="portfolio-items col-4">
            <?php

                $sql="SELECT * FROM tbl_juego WHERE id_juegos=$_REQUEST[id_juego]";


                $datos = mysqli_query($con, $sql);
                   //si se devuelve un valor diferente a 0 (hay datos)
                if(mysqli_num_rows($datos)!=0){
                    while ($mostrar = mysqli_fetch_array($datos)) {
               ?>

          <li class="portfolio-item apps">
               <div class="item-inner">
                   <div class="portfolio-image">
                       <img src="images/juegos/thumb/<?php echo $mostrar['jue_foto'];?>" alt="">
                   </div>
               <p>Juego: <?php echo utf8_encode($mostrar['jue_nombre']); ?></p>
                 <p>Propietario del Juego: <a href="#"><?php echo utf8_encode($mostrar['usu_emailP']); ?></a></p>
                   <p>Descripción: <?php echo utf8_encode($mostrar['jue_nombre']); ?></p>
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