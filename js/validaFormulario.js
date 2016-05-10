var validaFormulario=function(){
  var devolver = true;

///////////////// EMAIL /////////////////
  var email = document.getElementById("correo").value;

  //si es nulo
  if(email == null || email.length == 0){
    document.getElementById("error_correo_vacio").style.display = "block";
    document.getElementById("error_correo_vacio").innerHTML="<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'></span> Introduce una direccion de correo valida</div>";
    devolver = false;

    //sino si cumplen la expresion regular
  }else if(!/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(email)){
    document.getElementById("error_correo_vacio").style.display = "none";
     document.getElementById("error_correo_formato").style.display = "block";
    document.getElementById("error_correo_formato").innerHTML="<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'></span> El formato de correo es incorrecto.</div>";;
    devolver = false;

  }else{
    document.getElementById("error_correo_vacio").innerHTML = "<span class='glyphicon glyphicon-glyphicon glyphicon-ok-circle text-success'></span>";
    document.getElementById("error_correo_formato").style.display = "none";
  }

  /////////////// CONTRASEÑA ///////////////
  var pass = document.getElementById("pass").value;
  if(pass == null || pass.length == 0){
     document.getElementById("error_pass_vacio").style.display = "block";
    document.getElementById("error_pass_vacio").innerHTML = "<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'></span> Debe introducir una contraseña</div>";
    devolver = false;
  }else{
    document.getElementById("error_pass_vacio").innerHTML = "<span class='glyphicon glyphicon-glyphicon glyphicon-ok-circle text-success'></span>";

  }
  ////////// CONFIRMAR CONTRASEÑA //////////
  var pass = document.getElementById("pass").value;
  var confirmar_pass = document.getElementById("confirmar_pass").value;
  if(confirmar_pass == null || confirmar_pass.length == 0) {
    document.getElementById("error_confirmar_pass_vacio").style.display = "block";
    document.getElementById("error_confirmar_pass_vacio").innerHTML = "<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'></span> Debe introducir una contraseña</div>";
    devolver = false;
  } else if(pass!=confirmar_pass){
    document.getElementById("error_confirmar_pass_vacio").style.display = "none";
    document.getElementById("error_confirmar_pass_incorrecto").style.display = "block";
    document.getElementById("error_confirmar_pass_incorrecto").innerHTML = "<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'></span> Las contraseñas no coinciden</div>";
    devolver = false;
  }else{
    document.getElementById("error_confirmar_pass_vacio").innerHTML = "<span class='glyphicon glyphicon-glyphicon glyphicon-ok-circle text-success'></span>";
    document.getElementById("error_confirmar_pass_incorrecto").style.display = "none";
  }

  ///////////////// NOMBRE /////////////////
  var valor = document.getElementById("nombre").value;
  if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    document.getElementById("error_nombre").style.display = "block";
    document.getElementById("error_nombre").innerHTML = "<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'></span> Debe introducir un nombre</div>";;
    devolver = false;
  }else{
    document.getElementById("error_nombre").innerHTML = "<span class='glyphicon glyphicon-glyphicon glyphicon-ok-circle text-success'></span>";

  }

  ///////////////// APELLIDO /////////////////
  var valor = document.getElementById("apellido").value;
  if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    document.getElementById("error_apellido").style.display = "block";
    document.getElementById("error_apellido").innerHTML = "<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'></span> Debe introducir un apellido</div>";;
    devolver = false;
  }else{
    document.getElementById("error_apellido").innerHTML = "<span class='glyphicon glyphicon-glyphicon glyphicon-ok-circle text-success'></span>";
  }



  return devolver;

}
