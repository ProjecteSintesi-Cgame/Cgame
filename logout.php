<?php
if (isSet($_SESSION['mail'])) {
	session_destroy();
	header('location:login.php');
}
?>