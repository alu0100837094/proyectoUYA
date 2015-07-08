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
        // var length = Object.keys(response).length;
        // alert('dentro del success'+response[0].id_pu);
        // alert('dentro del success'+response[1].id_pu);
        // alert('dentro del success'+response[2].id_pu);
        // alert('dentro del success'+response[3].id_pu);
        // alert('dentro del success'+response[4].id_pu);
        // alert('dentro del success'+response[0].);
        // alert('dentro del success'+length);



        // +-------+-------+-------------+--------------+--------+-------+--------------+
        // | id_pu | fk_pu | descripcion | zona         | precio | banho | habitaciones |
        // +-------+-------+-------------+--------------+--------+-------+--------------+
        // |    81 |     4 |             | finca-espana |    400 |     3 |            3 |
        // |    80 |     4 | asdasd      | la-laguna    |    400 |     3 |            3 |
        // |    77 |     4 | sdfsdf      | la-laguna    |    300 |     4 |            3 |
        // |    75 |     4 | kkkkkk      | la-cuesta    |    500 |     2 |            2 |
        // +-------+-------+-------------+--------------+--------+-------+--------------+
        // if(response.type=='suss')
        // {
        //

        //Aqui empieza a ponerse todo el json con un for

        if(response.type=='suss')
        {
            for(var i in response)
            {
              var idCada="novedades_"+response[i].id_pu;
              var numeroID=response[i].id_pu;
              var zona=response[i].zona;
              var habitaciones=response[i].habitaciones;
              var banos=response[i].banho;
              var precio=response[i].precio;
              var desc=response[i].descripcion;
              // var novedadesN="<div id='"+idCada+"'><p>Zona</p>"+zona+"</div>"
              var novedadesN ="<tr><td style='visibility:hidden;'>"+numeroID+"</td><td>"+zona+"</td><td>"+habitaciones+"</td><td>"+banos+"</td></tr>";


              $("#tablaNovedades").append(novedadesN);
            }
        }else{
          var novedadesNo="No hay novedades";
          $("#tablaNovedades").append(novedadesNo);

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

  // Object.size = function(obj)
  // {
  //   var size = 0, key;
  //   for (key in obj) {
  //       if (obj.hasOwnProperty(key)) size++;
  //   }
  //   return size;
  // };

  // document.getElementById("demo").innerHTML =Object.size(employees);








});//cerrar ready
