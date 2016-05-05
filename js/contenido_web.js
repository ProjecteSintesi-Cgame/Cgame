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

$('#carga_portfolio').click(function(){
      $.ajax({
	    type: "POST",
	    url: "./contenido/portfolio.php",
	    success: function(a) {
	    	$('#main-slider').hide('slow');
            $('#carga_contenido').html(a);
	    }
       });
   });



$('#carga_services').click(function(){
      $.ajax({
	    type: "POST",
	    url: "./contenido/services.php",
	    success: function(a) {
	    	$('#main-slider').hide('slow');
            $('#carga_contenido').html(a);
	    }
       });
   });


$('#carga_aboutus').click(function(){
      $.ajax({
	    type: "POST",
	    url: "./contenido/aboutus.php",
	    success: function(a) {
	    	$('#main-slider').hide('slow');
            $('#carga_contenido').html(a);
	    }
       });
   });


