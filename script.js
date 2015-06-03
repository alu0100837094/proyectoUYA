$(document).ready(function(){

	$("#add_err").css('display', 'none', 'important');
	 $("#login").click(function(){
		  username=$("#email").val();
		  password=$("#password").val();
		  $.ajax({
		   type: "POST",
		   url: "login.php",
			 data: "email="+username+"&password="+password,
		   success: function(html){
			if(html=='true')    {
			 //$("#add_err").html("right username or password");
			 window.location="perfil.php";
			}
			else    {
			$("#add_err").css('display', 'inline', 'important');
			 $("#add_err").html("<img src='images/alert.png' class='responsive' alt='imagen_alerta' width='100' height='100'/>Email o Contraseña incorrecta");
			}
		   },
		   beforeSend:function()
		   {
			$("#add_err").css('display', 'inline', 'important');
			$("#add_err").html("<img src='images/ajax-loader.gif' /> Loading...")
		   }
		  });
		return false;
	});


});
