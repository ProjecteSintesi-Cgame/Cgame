
<?php
    session_start();
    if(isset($_SESSION['mail'])){
    include("conexion/conexion.php");
        $sql="SELECT * FROM `tbl_usuario` WHERE tbl_usuario.usu_email='$_SESSION[mail]'";
        //echo $sql;
        //$sql2="SELECT * FROM `tbl_juego` WHERE `tbl_juego`.`usu_email`=".$_SESSION['mail'];
        //echo $sql2;
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
        <main>

            <!-- PARTE DONDE SE VA A MOSTRAR LA INFORMACIÓN -->
            <?php
            //consulta de datos según el filtrado
              $datos = mysqli_query($con,$sql);
                while ($mostrar = mysqli_fetch_array($datos)) {
            ?>
            <br/>
                <table>
                  <tr>
                    <td><b>Nombre:</b></td>
                    <td><b>Apellido:</b></td>
                    <td><b>E-mail:</b></td>

                   
                  </tr>
                  <tr>
                    <td style="width:370px"><?php echo $mostrar['usu_nombre'];  ?></td>
                    <td style="width:370px"><?php echo $mostrar['usu_apellido']; ?></td>
                    <td style="width:370px"><?php echo $mostrar['usu_email'];  ?></td>

                  </tr>
                </table>
            <?php
            }
          ?>

        </br>
        <a href="modificar_usuario.php">Modificar Perfil</a></br></br>
        <a href="index.php">Index</a>
        </main>
    </body>
</html>

<?php
    }else{
        header("Location: login.php");
        die();
    }
?>

