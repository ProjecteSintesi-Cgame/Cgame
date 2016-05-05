$(document).ready(function(){
alert(usu1);
	cargaMensajes();
	setInterval(cargaMensajes,1000);

	function cargaMensajes(){
		
		$.ajax({
	  	  	type: "GET",
	  	  	url: "./procs/mostrarMensajes.proc.php",
	  	  	//data: "id="+id,
	  	  	dataType: "json",
	  	  	error: function(){
	  	  	  	alert("Error petición al cargar chat");
	  	  	},
	  	  	success: function(data){
	  	  		
	  	  		
	  	  		var myhtml= "";
	  	  		for (i=0;i<data.length;i++){
	  	  			if(data[i].usuario=='pepin'){
	  	  	  		myhtml += "<div class='contenido2' id='contenido'><div>";
	  	  	  		myhtml += data[i].usuario + "</br>"+ data[i].mensaje + "</div></a>";
	  	  	  		myhtml += "</div><br></div>";
	  	  	  	}else{
	  	  	  		myhtml += "<div id='contenido2'><div>";
	  	  	  		myhtml += data[i].usuario + "</br>"+ data[i].mensaje + "</div></a>";
	  	  	  		myhtml += "</div><br></div>";
	  	  	  	}
	  	  		}
	  	  		//alert(myhtml);
	  	  		$("#chat").html(myhtml);
	  	  	}
		})
	}

	


});

function insertarMensajes(e,texto){
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==13){
  	document.getElementById("escritor").value="",

  		$.ajax({
	  	  	type: "GET",
	  	  	url: "./procs/insertarMensajes.proc.php",
	  	  	data : { textoIns : texto },
	  	  	error: function(){
	  	  	  	alert("Error al insertar mensaje");
	  	  	},
	  	  	success: function(){
	  	  		
	  	  	}
		})



  }





}