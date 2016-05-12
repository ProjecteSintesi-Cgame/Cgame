// *********************** Al iniciar la pagina se cargara el slider y jegos index  ***********************//
juegosindex();
function juegosindex(){
	$.ajax({
	    type: "POST",
	    url: "./contenido/juegosindex.php",
	    success: function(a) {
            $('#carga_contenido').html(a);
	    }
       });
}

// *********************** Al clicar en el Logo o en icono de Home, cargara el slider y juegosindex ***********************//
$('#carga_index').click(function(){

      $.ajax({
	    type: "POST",
	    url: "./contenido/juegosindex.php",
	    success: function(a) {
	    	$('#main-slider').show('slow');
            $('#carga_contenido').html(a);
	    }
       });
   });

// *********************** Al clicar en un apartado del menu, carga el contenido y esconde el slider ***********************//

$('#carga_plataforma').click(function(){
      $.ajax({
	    type: "POST",
	    url: "./contenido/plataforma.php",
	    success: function(a) {
	    	$('#main-slider').hide('slow');
            $('#carga_contenido').html(a);
	    }
       });
   });

   $('#carga_verperfil').click(function(){
         $.ajax({
   	    type: "POST",
   	    url: "./contenido/perfil.php",
   	    success: function(a) {
   	    	$('#main-slider').hide('slow');
               $('#carga_contenido').html(a);
   	    }
          });
      });
	  
$('#carga_juego').click(function(){

      $.ajax({
	    type: "POST",
	    url: "./contenido/formJuegos.php",
	    success: function(a) {
	    	$('#main-slider').hide('slow');
            $('#carga_contenido').html(a);
	    }
       });
   });


$('#carga_chat').click(function(){
      $.ajax({
	    type: "POST",
	    url: "./contenido/listaChats.php",
	    success: function(a) {
	    	$('#main-slider').hide('slow');
            $('#carga_contenido').html(a);
	    }
       });
   });


// *********************** Al clicar en un apartado del menu, carga el contenido del Chat y esconde el slider ***********************//

function usuChat(mail){
	var usuM = mail;
	$.ajax({
	    type: "POST",
	    data: 'usuM='+usuM,
	    url: "./contenido/crearChat.proc.php",
	    success: function(a) {
	    	$('#main-slider').hide('slow');
            $('#ChatOP').html(a);
	    }
       });
}




// *********************** Al clicar en un apartado del menu, carga el contenido y esconde el slider ***********************//
//PASAR A JQUERY
	function validaFormularioJuego(){
	  var juego = document.getElementById("juego").value;
	  if(juego == null || juego.length == 0){

    	document.getElementById("error_juego_vacio").style.display = "block";
    	document.getElementById("error_juego_vacio").innerHTML="<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'></span> Introduce el nombre del juego</div>";
    	return false;
    }else{
    	document.getElementById("error_juego_vacio").style.display = "none";
    	var fd = new FormData(document.getElementById("form_Juego"));

    	$.ajax({
	    type: "POST",
	    url: "./contenido/anadirJuegos.proc.php",
	    data: fd,
	    cache: false,
    	contentType: false,
    	processData: false,
	    success: function(data) {
	    	$("#respuesta").html(data); // Mostrar la respuestas del script PHP.
	    }
       });
    }

	}

		// *********************** Al clicar en el juego, te carga el perfil de ese juego (perfiljuego.php) ***********************//


	function juegos(elemento){
		$.ajax({
   	    type: "POST",
		async: true,
		data: "id_juego="+elemento,
   	    url: "./contenido/perfiljuego.php",
   	    success: function(a) {
   	    	$('#main-slider').hide('slow');
               $('#carga_contenido').html(a);
   	    }
          });
	}

	// *********************** Al clicar en el propietario, te carga el perfil de ese usuario (perfilUser.php) ***********************//


	function perfil(elem){
		$.ajax({
   	    type: "POST",
		async: true,
		data: "usu_emailP="+elem,
   	    url: "./contenido/perfilUser.php",
   	    success: function(a) {
   	    	$('#main-slider').hide('slow');
               $('#carga_contenido').html(a);
   	    }
          });
	}
