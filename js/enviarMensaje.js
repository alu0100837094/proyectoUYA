$(document).ready(function()
{

$("#enviarM").click(function()
{
  email=$("#emailM").val();
  descripcion=$("#descripcion").val();
  if (email =='' || descripcion =='')
  {
    $("#add_err").html("<img src='/alu4635/images/alert.png' class='responsive' alt='imagen_cargando' width='50' height='50' /><p>Llene ambos campos</p>");

  } else
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

  }


});//cerrar function del boton enviar

});//cerrar function
