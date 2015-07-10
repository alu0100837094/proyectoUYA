$(document).ready(function()
{
document.body.onload = function() {recibidos()};
// document.getElementsByTagName('body').onload = function() {novedades()};
  function recibidos()
  {
    $.ajax(
    {
      url: "/alu4635/php/mensajesRecibidos.php",
      type: "POST",
      dataType:'json',

      success: function(response)
      {
        var length = Object.keys(response.novedad).length;

        if(response.type=='suss')
        {
            for(i=0; i<length;i++)
            {

              var email=response.mensaje[i].email;
              var texto=response.mensaje[i].texto;
              // var novedadesN="<div id='"+idCada+"'><p>Zona</p>"+zona+"</div>"
              // var botonVer="<button id="+idCada+" type='button' class='btn btn-default btn-xs' class='btn btn-default btn-lg'><span class='glyphicon glyphicon-star' aria-hidden='true'></span> Ver</button>";
              // var novedadesN ="<tr><td class='hidden-xs' style='visibility:hidden;'>"+numeroID+"</td><td>"+zona+"</td><td>"+habitaciones+"</td><td>"+banos+"</td><td>"+botonVer+"</td><td>"+botonCon+"</td></tr>";
              var textosRecibidos ="<tr><td>"+email+"</td><td>"+texto+"</td></tr>";

              // $("#tablaNovedades").append(novedadesN);
              $('#nohayRes').css("visibility","hidden");
              $("#tablaMensajes").css("visibility","visible");
              $("#tablaMensajes").append(novedadesN);

            }
        }else{
          // var novedadesNo="<h1>No hay novedades</h1>";
          // $("#tablaNovedades").append(novedadesNo);
          $('#tablaMensajes').css("visibility","hidden");
          $("td").remove();
          $('#nohayRes').css("visibility","visible");

        }
      },//cierro succes
      error: function(jqXHR,exception)
      {
        if (jqXHR.status === 0) {
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
      },//cierro error

    });//cerrar ajax


  }//cerrar novedades



  $("#tablaNovedades tr td div").bind('keydown', function(event)
  {
    if(event.keyCode == 9)
    { //for tab key
      var currentDiv = event.target;
      $(currentDiv).parents("td").next("td").find("div").click();
      return false; // <== here
    }
  });

  $("button").click(function()
  {
    $('td').html(   'Descripción : ' + $(this).attr('data-descripcion') + '    |     Precio : ' +  $(this).attr('data-precio')   );
    $('#show_img').html("<img src="+$(this).attr('data-imagen')+"></img>");

  });






});//cerrar ready
