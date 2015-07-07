$(document).ready(function(){

 //$("#add_err").css('display', 'none', 'important');
  $("#publicar").click(function(){
   //debugger;
   var post_datos = new FormData();
    post_datos.append('zona',$('select[name=zona]').val());
    post_datos.append('precio',$('select[name=precio]').val());
    post_datos.append('dormitorios',$('select[name=dormitorios]').val());
    post_datos.append('banos',$('select[name=banos]').val());
    post_datos.append('descripcion',$('textarea[name=descripcion]').val());
    post_datos.append('imagen',$('input[name=imagen]')[0].files[0]);
    //data.append('file','#file');
    //imagen=$("#imagen").val();
    zona=$("#zona").val();
    precio=$("#precio").val();
    dormitorios=$("#dormitorio").val();
    banos=$("#banos").val();
    // descripcion=$("#descripcion").val();
    // datos= "zona="+zona+"&precio="+precio+"&dormitorios="+dormitorios+"&banos="+banos+"&descripcion="+descripcion+"&imagen="+data;

		// alert(datos);
     alert(post_datos);

		if( zona == '' || precio == '' || dormitorios == '' || banos == '' ){
			$("#add_err").html("<img src='/alu4635/images/alert.png' class='responsive' alt='imagen_cargando' width='50' height='50' /><p class='text-danger'>*  Campos obligatorios</p>");
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
        url: "/php/publica.php",
        type: "POST",
        data: post_datos,
        processData: false,
        contentType: false,
        dataType:'json',


      success: function(response){

      alert("Entre al succes" +response);
     //window.location="perfil.php";
     //load json data from server and output message
 				if(response.type == 'error' || response.type == 'prueba'){ //load json data from server and output message
           $("#add_err").html("<img src='/alu4635/images/alert.png' class='responsive' alt='imagen_cargando' width='50' height='50' /><p class='text-danger'>*  ERROR : "+response.text+"</p>");
				}else{
          if(response.type == 'suss'){

				    $("#cuerpo").html("<div id='publicacionExitosa'><div id='regEx' class='text-center text-success'><h1><span class='glyphicon glyphicon-ok' aria-hidden='true'></span>  PUBLICACION REALIZADA CON EXITO </h1><h2>Pulse el boton para volver a Inicio</h2><a href='/alu4635/html/perfil.php'>Volver a Inicio &nbsp</a><a href='/alu4635/html/publicar.php'>&nbsp Realizar otra Publicación</a><br><br></div></div>");

          }else{
            alert("error error error");
          }
				}
				//$("#contact_form #contact_results").hide().html(output).slideDown();



  //  if(html=='true')    {
  //   //$("#add_err").html("right username or password");
  //   window.location="perfil.php";
  //   //cambiar el cuerpo de la pagina por un mensaje que se publico con exito
  //  }
  //  else    {
  //  $("#add_err").css('display', 'inline', 'important');
  //   $("#add_err").html("<img src='images/alert.png' class='responsive' alt='imagen_cargando' width='50' height='50' />Correo o contraseña incorrectos");
  //  }
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
