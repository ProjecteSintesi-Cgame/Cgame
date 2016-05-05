
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/chat.css" rel="stylesheet">
    <script>
    	var usu1=<?php echo '"aitor.blesa@fje.edu"';?>;
    	

    </script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/chat.js"></script>
    
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="0">
	<div id="chat">

	</div>
	</br>
	<input type="text" name="escritor" id="escritor" onkeypress="insertarMensajes(event,document.getElementById('escritor').value)">


</body>
</html>