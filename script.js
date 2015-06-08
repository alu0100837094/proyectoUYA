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


});
