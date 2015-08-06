$(document).ready(function(){
    $("#Busqueda").click(function(){
	 zona=$("#Zona").val();
	 precio=$("#Precio").val();
	 dormitorios=$("#Dormitorios").val();
	 banos=$("#Banos").val();
	 var todos=$("#form_buscar").serialize();
	//  alert(todos);
	 $.ajax({
	    type: "POST",
	    url: "/alu4635/php/buscar_bdd.php",
	    data: todos,
      dataType:'json',
	    success: function(response)
      {


  	     if(response.type=='suss')
         {
           $("td").remove();
           var length = Object.keys(response.busqueda).length;
           for(i=0; i<length;i++)
           {
             var idCada="'"+response.busqueda[i].id_pu+"'";
             var foto="'"+response.busqueda[i].foto+"'";
             var numeroID=response.busqueda[i].id_pu;
             var zona=response.busqueda[i].zona;
             var habitaciones=response.busqueda[i].habitaciones;
             var banos=response.busqueda[i].banho;
             var precio=response.busqueda[i].precio;
             var desc=response.busqueda[i].descripcion;
             var botonCon="<button data-id="+idCada+"id='contactar' type='button' class='btn btn-default btn-lg'><span class='glyphicon glyphicon-envelope' aria-hidden='true'></span> Contactar</button>";
             // var novedadesN="<div id='"+idCada+"'><p>Zona</p>"+zona+"</div>"
             var busqueda ="<tr><td class='hidden-xs' style='visibility:hidden;' >"+numeroID+"</td><td><img class='img-rounded img-responsive' alt='foto de la publicacion' width='200' height='200' src="+foto+"></td><td>"+precio+"</td><td>"+zona+"</td><td>"+habitaciones+"</td><td>"+banos+"</td><td>"+desc+"</td><td>"+botonCon+"</td></tr>";

              $('#nohayRes').css("visibility","hidden");
              $("#tablaRespuesta").css("visibility","visible");
              $("#tablaRespuesta").append(busqueda);

           }
         }else
         {
           $('#tablaRespuesta').css("visibility","hidden");
           $("td").remove();
           $('#nohayRes').css("visibility","visible");
         }
         var elBoton="<script type='text/javascript' src='/alu4635/js/contactar.js' ></script>";
         $("#tablaRespuesta").append(elBoton);

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
