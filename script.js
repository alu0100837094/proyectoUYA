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
}); //fin function de login



 $("registrar").click(function(){
   nombre=$("#nombre").val();
   apellidos=$("#apellidos").val();
   emailR=$("#emailR").val();
   passwordR=$("#passwordR").val();
   passwordR2=$('#passwordR2').val();

   if(emailR =='' || passwordR =='' || apellidos == '' || nombre == ''){
     $("#add_errR").html("<p>Llene todos los campos</p>");
   }
   else
   {
     $.ajax({
     type: "POST",
     url: "registro.php",
     data: "nombre="+nombre+"&apellidos="+apellidos+"&emailR="+emailR+"&passwordR="+passwordR,
     success: function(html){

     alert("Entre al succes de registro"+html);
    //window.location="perfil.php";


  if(html=='true')    {

   window.location="perfil.php";//aquí que direccione a una página que diga Gracias por registrarse
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
}); //fin function de registro



 });


});
