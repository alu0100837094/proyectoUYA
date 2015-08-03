$(document).ready(function()
{
    $('button').click(function()
    {
        var idParaConsulta=$(this).attr('data-id');
        //convertir a json
        var data="{ 'idParaConsulta': '"+idParaConsulta+"' }"
        alert(idParaConsulta);
        var formMensaje="<h2>Mensaje a contacto</h2><div class='form-group'><br><br><div class='col-sm-12'><form id='form_publicar' class='form-horizontal' enctype='multipart/form-data'><div id='Email_' class='form-group'><div class='col-sm-6'><label id='label_correo' for='inputEmail2' class='col-sm-0 control-label'>Correo electrónico</label><input id='emailM' name='email' type='email' aria-labelledby='Email_ label_correo' aria-required='true' aria-describedby='Email' class='form-control' id='inputEmail2' placeholder='Escriba su correo electrónico'></div></div><div class='col-sm-6'><label id='mensajePublicacion' class='control-label' for='descripcion'>Mensaje</label><textarea id='descripcion' name='descripcion' class='form-control' placeholder='Escriba toda la información necesaria para que el usuario se pueda contactar con usted'></textarea><br><button id='enviarM' type='button' class='btn btn-primary btn-lg'>Publicar</button></div></div></form></div>";
        $("#paraMensaje").html(formMensaje);
        //Mirar como sacar el data-id del boton
          $.ajax(
            {
              type:'POST',
              url:'../php/contactar.php',
              data:data,
              dataType:'json',
              succes:function(response)
              {
                alert(response.type);

                if (response.type=='suss')
                {

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
               }
            });

    });//cerrar click boton
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
