<?php
session_start();
	include ("../conexion/conexion.php");

?>
<div class="container">
            <div class="box first">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <?php
                                 $sqlChat="SELECT usu_emailP, usu_emailC FROM tbl_chat WHERE tbl_chat.usu_emailP='$_SESSION[mail]' OR tbl_chat.usu_emailC='$_SESSION[mail]' ";
                                 //echo $sqlChat;
                                 $Tchats = mysqli_query($con, $sqlChat);
                                                  
                                    while($chat=mysqli_fetch_array($Tchats)) { 
                                                               
                                        if ($chat['usu_emailP']==$_SESSION['mail']){
                                            $sqlUsu= "SELECT id_usuario,usu_nombre,usu_email FROM tbl_usuario WHERE usu_email='$chat[usu_emailC]'";
                                            //echo $sqlUsu;
                                                    $Tusu = mysqli_query($con, $sqlUsu);
                                                  
                                                     while($usu=mysqli_fetch_array($Tusu)) { 
                                                            echo "<input type='button' id='idUsuChat' onclick=usuChat('$usu[usu_email]') value = '$usu[usu_nombre]' '> </br>";

                                                     }


                                        }else{
                                            $sqlUsu= "SELECT id_usuario,usu_nombre,usu_email FROM tbl_usuario WHERE usu_email='$chat[usu_emailP]'";
                                                    $Tusu = mysqli_query($con, $sqlUsu);
                                                  
                                                     while($usu=mysqli_fetch_array($Tusu)) { 
                                                            echo "<input type='button' id='idUsuChat' onclick=usuChat('$usu[usu_email]') value = '$usu[usu_nombre]' '> </br>";

                                                     }

                                        }
                                    }
                                        ?>

                                        

                        </div>
                        <div id="ChatOP" class="ChatOP">

                        </div>
                    </div><!--/.col-md-4-->
                    
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->


