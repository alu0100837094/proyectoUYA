$(document).ready(function(){

 //$("#add_err").css('display', 'none', 'important');
  $("#publicar").click(function(){
   //debugger;
    imagen=$("#imagen_publicar").val();
    zona=$("#zona_publicar").val();
    precio=$("#precio_publicar").val();
    dormitorios=$("#dormitorio_publicar").val();
    banos=$("#banos_publicar").val();
    descripcion=$("#descripcion_publicar").val();
		//alert(email);
		if(zona =='' || precio =='' || dormitorios=='' || banos==''){
			$("#add_err").html("<img src='images/alert.png' class='responsive' alt='imagen_cargando' width='50' height='50' /><p class='text-danger'>*  Campos obligatorios</p>");
      $("#zona_publicar").html('<label id="zona_publicar" class="control-label" for="zona">Zona  *</label>');
      $("#precio_publicar").html('<label id="precio_publicar" class="control-label" for="precio">Precio €  * </label>');
      $("#dormitorio_publicar").html('<label id="dormitorio_publicar" class="control-label" for="dormi">Dormitorios</label>');
      $("#banos_publicar").html('<label id="banos_publicar" class="control-label" for="banos">Baños  *</label>');

      $("#form_zona").addClass("has-error");
      $("#form_precio").addClass("has-error");
      $("#form_dormitorio").addClass("has-error");
      $("#form_bano").addClass("has-error has-feedback");
		}
		else
		{
			$.ajax({
      type: "POST",
      url: "publica.php",
      data: "email="+email+"&password="+password,
      success: function(html){

      alert("Entre al succes"+html);
     //window.location="perfil.php";


   if(html=='true')    {
    //$("#add_err").html("right username or password");
    window.location="perfil.php";
   }
   else    {
   $("#add_err").css('display', 'inline', 'important');
    $("#add_err").html("<img src='images/alert.png' class='responsive' alt='imagen_cargando' width='50' height='50' />Correo o contraseña incorrectos");
   }
     },
     error:function(){
      alert("Error con ajax");
      },
  //    beforeSend:function()
  //    {
  //  $("#add_err").css('display', 'inline', 'important');
  //  $("#add_err").html("<img src='images/ajax-loader.gif' class='responsive' alt='imagen_cargando' width='50' height='50' /> Loading...")
  //    }
    });
		}


  return false;
});

//______________________________________________________________________________________________________________________

 $("#registrar").click(function(){
   nombre=$("#nombre").val();
   apellidos=$("#apellidos").val();
   emailR=$("#emailR").val();
   passwordR=$("#passwordR").val();
   passwordR2=$('#passwordR2').val();
   var formDatos= $("#regform").serialize();
   var datos={"nombre":nombre,"apellidos":apellidos,"emailR":emailR,"passwordR":passwordR};
   var data= "nombre="+nombre+"&apellidos="+apellidos+"&emailR="+emailR+"&passwordR="+passwordR+"&passwordR2="+passwordR2;
   alert("lo que serializo " +data);
   alert("Esta mandando esto : "+nombre+apellidos+emailR+passwordR2+passwordR);

   if(emailR =='' || passwordR =='' || apellidos == '' || nombre == '' || passwordR2 == ''){
     $("#add_errR").html("<p>Llene todos los campos</p>");
   }
   else
   {
     $.ajax({
     type: "POST",
     url: "registro.php",
     data: data,
     //dataType: "json",
     //data: "nombre="+nombre+"&apellidos="+apellidos+"&emailR="+emailR+"&passwordR="+passwordR+"&passwordR2="+passwordR2,
     success: function(html){


     alert("Entre al succes de registro"+html);
    //window.location="perfil.php";


  if(html=='true')    {

   window.location="registroExitoso.html";//aquí que direccione a una página que diga Gracias por registrarse
  }
  else    {
  $("#add_errR").css('display', 'inline', 'important');
   $("#add_errR").html("<img src='images/alert.png' class='responsive' alt='imagen_cargando' width='50' height='50'/>Correo electrónico ya está registrado");
  }
    },
    error:function(jqXHR,exception)
    { if (jqXHR.status === 0) {
        alert('Not connected.\nPlease verify your network connection.');
    } else if (jqXHR.status == 404) {
      alert('The requested page not found. [404]');
    } else if (jqXHR.status == 500) {
      alert('Internal Server Error [500].');
    } else if (exception === 'parsererror') {
      alert('Requested JSON parse failed.');
    } else if (exception === 'timeout') {
      alert('Time out error.');
    } else if (exception === 'abort') {
      alert('Ajax request aborted.');
    } else {
      alert('Uncaught Error.\n' + jqXHR.responseText);
    }
     alert("Error con ajax");
     },
 //    beforeSend:function()
 //    {
 //  $("#add_err").css('display', 'inline', 'important');
 //  $("#add_err").html("<img src='images/ajax-loader.gif' class='responsive' alt='imagen_cargando' width='50' height='50' /> Loading...")
 //    }
   });
   }


 return false;
});
});
