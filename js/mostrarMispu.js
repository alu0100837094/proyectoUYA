$(document).ready(function()
{
document.body.onload = function() {misPubli()};
function misPubli()
{
  $.ajax(
  {
    url: "/alu4635/php/misPublicaciones.php",
    type: "POST",
    dataType:'json',

    success: function(response)
    {
      // var length = Object.keys(response.novedad).length;

      if(response.type=='suss')
      {
      var length = Object.keys(response.publicacion).length;
          for(i=0; i<length;i++)
          {

            var idCada="'"+response.publicacion[i].id_pu+"'";
            var foto="'"+response.publicacion[i].foto+"'";
            var numeroID=response.publicacion[i].id_pu;
            var zona=response.publicacion[i].zona;
            var habitaciones=response.publicacion[i].habitaciones;
            var banos=response.publicacion[i].banho;
            var precio=response.publicacion[i].precio;
            var desc=response.publicacion[i].descripcion;
            // var novedadesN="<div id='"+idCada+"'><p>Zona</p>"+zona+"</div>"
            // var botonVer="<button id="+idCada+" type='button' class='btn btn-default btn-xs' class='btn btn-default btn-lg'><span class='glyphicon glyphicon-star' aria-hidden='true'></span> Ver</button>";
            var botonCon="<script type='text/javascript' src='/alu4635/js/contactar.js' ></script><button data-id="+idCada+"id='contactar' type='button' class='btn btn-default btn-xs' class='btn btn-default btn-lg'><span class='glyphicon glyphicon-star' aria-hidden='true'></span> Contactar</button>";
            // var novedadesN ="<tr><td class='hidden-xs' style='visibility:hidden;'>"+numeroID+"</td><td>"+zona+"</td><td>"+habitaciones+"</td><td>"+banos+"</td><td>"+botonVer+"</td><td>"+botonCon+"</td></tr>";
            var novedadesN ="<tr><td class='hidden-xs' style='visibility:hidden;' >"+numeroID+"</td><td><img class='img-rounded img-responsive' alt='foto de la publicacion' width='200' height='200' src="+foto+"></td><td>"+precio+"</td><td>"+zona+"</td><td>"+habitaciones+"</td><td>"+banos+"</td><td>"+desc+"</td></tr>";


            // $("#tablaNovedades").append(novedadesN);
            $('#nohayPublis').css("visibility","hidden");
            $("#tablaPublis").css("visibility","visible");
            $("#tablaPublis").append(novedadesN);

          }
      }else{

        // var novedadesNo="<h1>No hay novedades</h1>";
        // $("#tablaNovedades").append(novedadesNo);
        $('#tablaPublis').css("visibility","hidden");
        $("td").remove();
        $('#nohayPublis').css("visibility","visible");

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








});//cerrar ready
