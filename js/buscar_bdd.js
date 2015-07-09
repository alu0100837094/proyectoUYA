$(document).ready(function(){
    $("#Busqueda").click(function(){
	 zona=$("#Zona").val();
	 precio=$("#Precio").val();
	 dormitorios=$("#Dormitorios").val();
	 banos=$("#Banos").val();
	 var todos=$("#form_buscar").serialize();
	 alert(todos);
	 $.ajax({
	    type: "POST",
	    url: "/alu4635/php/buscar_bdd.php",
	    data: todos,
      dataType:'json',
	    success: function(response)
      {


  	     if(response.type=='suss')
         {
           var length = Object.keys(response.busqueda).length;
           for(i=0; i<length;i++)
           {
             var idCada="'"+response.busqueda[i].id_pu+"'";
             var numeroID=response.busqueda[i].id_pu;
             var zona=response.busqueda[i].zona;
             var habitaciones=response.busqueda[i].habitaciones;
             var banos=response.busqueda[i].banho;
             var precio=response.busqueda[i].precio;
             var desc=response.busqueda[i].descripcion;
             // var novedadesN="<div id='"+idCada+"'><p>Zona</p>"+zona+"</div>"
             var busqueda ="<tr><td class='hidden-xs' style='visibility:hidden;' >"+numeroID+"</td><td>"+zona+"</td><td>"+habitaciones+"</td><td>"+banos+"</td></tr>";
              $('#nohayRes').css("visibility","hidden");
              $("#tablaRespuesta").css("visibility","visible");
              $("#tablaRespuesta").append(busqueda);

           }
         }else
         {
           $("#tablaRespuesta").css("visibility","hidden");
           $('#nohayRes').css("visibility","visible");
         }

},



	error:function(){
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
});

     });
});
