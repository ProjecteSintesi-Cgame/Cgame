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

                $sql="SELECT * FROM tbl_juego ORDER BY RAND() LIMIT 8";


                $datos = mysqli_query($con, $sql);
                   //si se devuelve un valor diferente a 0 (hay datos)
                if(mysqli_num_rows($datos)!=0){
                    while ($mostrar = mysqli_fetch_array($datos)) {
               ?>

          <li class="portfolio-item apps">
               <div class="item-inner">
                   <div class="portfolio-image">
                       <img src="images/juegos/thumb/<?php echo $mostrar['jue_foto'];?>" alt="">
                       <div class="overlay">
                           <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" onclick="juegos(<?php echo $mostrar['id_juegos'];?>);"><i class="icon-eye-open"></i></a>
                       </div>
                   </div>
               <h5><?php echo utf8_encode($mostrar['jue_nombre']); ?></h5>
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
