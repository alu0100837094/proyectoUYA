$(document).ready(function()
{
document.body.onload = function() {novedades()};
// document.getElementsByTagName('body').onload = function() {novedades()};
  function novedades()
  {
    $.ajax(
    {
      url: "/alu4635/php/novedades.php",
      type: "POST",
      dataType:'json',

      success: function(response)
      {
        alert('dentro del success'+response.type);
        if(response.type=='suss')
        {

          $("#publicaciones").html(






          );

        }else
        {

        }
      },
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
      }

    });//cerrar ajax


  }//cerrar novedades







});//cerrar ready
