$(document).ready(function(){

 //$("#add_err").css('display', 'none', 'important');
  $("#login").click(function(){
   //debugger;
    email=$("#email").val();
    password=$("#password").val();
		//alert(email);
		if(email =='' || password ==''){
			$("#add_err").html("<p>Llene ambos campos</p>");
		}
		else
		{
			$.ajax({
      type: "POST",
      url: "login.php",
      data: "email="+email+"&password="+password,
      success: function(html){

      alert("Entre al succes"+html);
     //window.location="perfil.php";


   if(html=='true')    {
    //$("#add_err").html("right username or password");
    window.location="perfil.php";
   }
   else    {
   $("#add_err").css('display', 'inline', 'important');
    $("#add_err").html("<img src='images/alert.png' />Wrong username or password");
   }
     },
     error:function(){
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

//______________________________________________________________________________________________________________________

 $("#registrar").click(function(){
   nombre=$("#nombre").val();
   apellidos=$("#apellidos").val();
   emailR=$("#emailR").val();
   passwordR=$("#passwordR").val();
   passwordR2=$('#passwordR2').val();
   var formDatos= $("#regform").serialize();
   var datos={"nombre":nombre,"apellidos":apellidos,"emailR":emailR,"passwordR":passwordR};
   var data= "nombre="+nombre+"&apellidos="+apellidos+"&emailR="+emailR+"&passwordR="+passwordR+"&passwordR2="+passwordR2;
   alert("lo que serializo " +data);
   alert("Esta mandando esto : "+nombre+apellidos+emailR+passwordR2+passwordR);

   if(emailR =='' || passwordR =='' || apellidos == '' || nombre == '' || passwordR2 == ''){
     $("#add_errR").html("<p>Llene todos los campos</p>");
   }
   else
   {
     $.ajax({
     type: "POST",
     url: "registro.php",
     data: data,
     //dataType: "json",
     //data: "nombre="+nombre+"&apellidos="+apellidos+"&emailR="+emailR+"&passwordR="+passwordR+"&passwordR2="+passwordR2,
     success: function(html){
       

     alert("Entre al succes de registro"+html);
    //window.location="perfil.php";


  if(html=='true')    {

   window.location="registroExitoso.html";//aquí que direccione a una página que diga Gracias por registrarse
  }
  else    {
  $("#add_err").css('display', 'inline', 'important');
   $("#add_err").html("<img src='images/alert.png' />Correo electrónico ya registrado");
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
