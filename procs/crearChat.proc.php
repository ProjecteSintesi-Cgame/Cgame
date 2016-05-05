<?php
session_start();

include ("../conexion/conexion.php");

if (!isset($_SESSION['mail'])) {
   header('location: ../login.php');
}

$existeChat = "SELECT * FROM tbl_chat WHERE (usu_emailC='aitor.blesa@fje.edu' AND usu_emailP='pepin@fje.edu') OR (usu_emailC='pepin@fje.edu' AND usu_emailP='aitor.blesa@fje.edu')";

if(mysqli_query($con,$existeChat)){
  header('location: ../chat.php?usu_emailC="aitor.blesa@fje.edu"&usu_emailP="pepin@fje.edu"');
}else {
	$creaChat="INSERT INTO tbl_chat(usu_emailC,usu_emailP) VALUES ('aitor.blesa@fje.edu','sergio.ayala@fje.edu')";
  	mysqli_query($con,$creaChat);
  	 header('location: ../chat.php');
}

?>
