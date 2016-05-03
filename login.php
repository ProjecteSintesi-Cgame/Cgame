<?php
 	//Iniciamos sesion.
	session_start();
	if(isset($_SESSION['error_login'])) $error_login = $_SESSION['error_login'];
	if(isset($_SESSION['creado_correctamente'])) $creado_correctamente = $_SESSION['creado_correctamente'];
	if(isset($_SESSION['validarse'])) $validarse = $_SESSION['validarse'];
	session_destroy();
	
	setcookie('Cgame', '', time() - 3600);
?>
<html>
<head>
    <title>Cgame</title>
    
   
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>

	<form  method="POST" action="procs/login.proc.php">
		<input type="hidden" name="login" value="si">
		<h2 class="ui header">
  			Login
		</h2>
		<!-- MENSAJES BUENOS -->
		<?php
		if(isset($creado_correctamente))
			echo "<div class='ui form success'>
 			<div class='ui success message'><p>" . $creado_correctamente . "</p></div></div>" ;
		?>
		<!-- MENSAJES MALOS -->
		<?php
		if(isset($validarse)) 
			echo "<div class='ui form error'>
 			<div class='ui error message'><p> " . $validarse . "</p></div></div>";
		?>
		<div >
	  		<div >
	   			<div >
	  				<input type="text" placeholder="Email" name="correo">
	  				<i class="mail icon"></i>
	  				
				</div>
	  		</div>
	  		<div>
	  			<div>
	  				<input type="password" placeholder="Password" name="contrasena">
	  				<i class="lock icon"></i>
				</div>
	 		 </div>
	 		<input type="submit" class="ui inverted orange button" value="Login"/>
	 		 <input type="button" class="ui inverted orange button" onclick="location='registro.php'" value="Registrate"/>
	 		
		</div>
	</form>
	
</body>
</html>
