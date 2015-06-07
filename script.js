$(document).ready(function()
{

	 //$("#add_err").css('display', 'none', 'important');
	 $("#login").click(function()
	{
		  email=$("#email").val();
		  password=$("#password").val();
			alert(email);
			alert(password);
		  $.ajax({
				data:"email="+email+"&password="+password,
			  url:'login2.php',
			  type:'post',
				beforeSend:function()
				{
					$("#add_err").css('display', 'inline', 'important');
					$("#add_err").html("<img src='images/ajax-loader.gif' class='responsive' alt='imagen_cargando' width='100' height='100'/> Loading...")
				},
				 success:function(response)
				{
				if(response=='true')
				{
				 $("#add_err").html("Email y contraseñas OK");
				 //Aquí pasa algo
				alert("dentro del true");
				 window.location="perfil.php";
				}
				else
				{
				 $("#add_err").css('display', 'inline', 'important');
				 $("#add_err").html("<img src='images/alert.png' class='responsive' alt='imagen_alerta' width='100' height='100'/>Email o Contraseña incorrecta");
				}
			  }
		  });
		return false;
	});


});
