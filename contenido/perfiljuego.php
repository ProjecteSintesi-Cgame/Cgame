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
                      $mail= $mostrar['usu_emailP'];

               ?>

          <li class="portfolio-item apps">
               <div class="item-inner">
                   <div class="portfolio-image">
                    <?php
                      if ($mostrar['jue_foto']==""){
                        ?>
                      <img class="img-responsive" src="./images/juegos/thumb/juego.png" alt="">
                      <?php
                    }else{
                      ?>
                      <img class="img-responsive" src="./images/juegos/thumb/<?php echo $mostrar['jue_foto'];?>" alt="">
                      <?php
                    }
                    ?>
                   </div>
               <p>Juego: <?php echo utf8_encode($mostrar['jue_nombre']); ?></p>
                 <p>Propietario del Juego:
                  <!-- Input que pasa el campo usu_emailP de la funcion perfil, y esta la redirije al perfil del usuario -->
                 <a <?php echo "<input type='button' id='idUsuChat' onclick=perfil('$mostrar[usu_emailP]')"; ?> ><i class="unhide icon"></i></a>

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
<script src="../js/contenido_web.js"></script>



