$(document).ready(function()
{
    $("#contactar").click(function()
    {
        var idParaConsulta=("#contactar").attr('data-id');
        //convertir a json
        var data="{ 'idParaConsulta': '"+idParaConsulta+"' }"
        //Mirar como sacar el data-id del boton

        if(idParaConsulta)
        {
          $.ajax(
            {
              type:'POST',
              url:'alu4635/php/contactar.php',
              data:data,
              dataType:'json',
              succes:function(response)
              {

                if (response.type=='suss')
                {
                  var formMensaje="<div class='form-group'>
      							<br><br>
                    <div class='col-sm-12'>
                    <form id='form_publicar' class='form-horizontal' enctype='multipart/form-data'>
                    <div id='Email_' class='form-group'>
					              <label id='label_correo' for='inputEmail2' class='col-sm-0 control-label'></label>
				              	<div class='col-sm-10'>
					                  	<input id='emailM' name='email' type='email' aria-labelledby='Email_ label_correo' aria-required='true' aria-describedby='Email' class='form-control' id='inputEmail2' placeholder='Email'>
					              </div>
				            </div>
                    <label id='mensajePublicacion' class='control-label' for='descripcion'>Mensaje</label>
      							<textarea id='descripcion' name='descripcion' class='form-control' placeholder='Escriba toda la información para que el usuario se pueda contactar con usted'></textarea>
      						</div>
                  <button id='enviarM' type='button' class='btn btn-primary btn-lg'>Publicar</button>
                  </form>
                  </div>
                  ";
                  $("#paraMensaje").html(formMensaje);
                  var email=response.email;
                  $("#emailM").append(email);



                }else
                {
                  alert("Error , usuario no disponible");
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
            });
        }else
        {
          alert("No se ha podido extraer el ID con el attr ");
        }
    )};//cerrar click boton
//================================================================================
    $("#enviarM").click(function()
    {
      var mensaje_datos = new FormData();
      mensaje.append('email',$('input[name=email]').val());
      mensaje_datos.append('mensaje',$('textarea[name=descripcion]').val());


      $.ajax(
        {
          type:'POST',
          url:'alu4635/php/mensaje.php',
          data:mensaje_datos,
          dataType:'json',
          succes:function(response)
          {
            if (reponse.type=='suss')
            {
              var enviado="<p class='text-success'>Mensaje enviado correctamente</p>";
              $("#paraMensaje").html();
            }else
            {
              alert("El mensaje no se ha podido enviar");
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


        });//cerrar ajax segundo

    });//cerrar function del boton enviar

});//cerrar function
