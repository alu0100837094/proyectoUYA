$(document).ready(function(){

	$("#add_err").css('display', 'none', 'important');
	 $("#login").click(function(){
		  email=$("#email").val();
		  password=$("#password").val();
			alert(username);
			alert(password);
		  $.ajax({
		   type: "POST",
		   url: "login.php",
			 data: "email="+email+"&password="+password,
			 success: function(html){
			if(html=='true')    {
			 //$("#add_err").html("right username or password");
			 //Aquí pasa algo
			alert("dentro del true");
			 window.location="perfil.php";
			}
			else    {
			 $("#add_err").css('display', 'inline', 'important');
			 $("#add_err").html("<img src='images/alert.png' class='responsive' alt='imagen_alerta' width='100' height='100'/>Email o Contraseña incorrecta");
			}
		   },
		  //  beforeSend:function()
		  //  {
			// $("#add_err").css('display', 'inline', 'important');
			// $("#add_err").html("<img src='images/ajax-loader.gif' /> Loading...")
		  //  }
		  });
		return false;
	});


});
