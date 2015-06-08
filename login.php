<?php
session_start(); // Empezando la sesión
$error=''; // Variable To Store Error Message
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Llene ambos campos";
echo '<script type="text/javascript"> 	$("#add_err").html("Llene ambos campos");</script>';
}
else
{

echo "----Entre al Loguin.php----";
// Define $useremail and $password
$email=$_POST['email'];//john@example.com
$password=$_POST['password'];//123456

$servername = "localhost";
$username2 = "alu4635";
$password2 = "5sw5CK";
$dbname = "alu4635";
echo "$email.$password";

// Estableciendo la conexión con el servidor, pasandole como parametros el servername, el user_id y la password y el nombre de la basedatos
//$connection = new mysqli($servername, $username2, $password2, $dbname);
$connection = mysql_connect($servername, $username2, $password2,$dbname) or die("Could not connect database :" . mysql_error());
//mysql_select_db($dbname, $connection) or die("Could not select database");
// Para proteger de inyección MySQL, para propositos de seguridad
$useremail = stripslashes($email);
$password = stripslashes($password);
$useremail = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db($dbname, $connection) or die("no se pudo seleccionar la base de datos : " . mysql_error());
// SQL query to fetch information of registerd users and finds user match.

$query = mysql_query("SELECT * FROM MyGuests WHERE password='$password' AND email='$email'", $connection) or die('Consulta fallida :' .mysql_error());


//$consulta=
//$qry = "SELECT *  FROM users WHERE email='".useremail."' AND password='".$password."' ";

$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$email; // Initializing Session
header("location: perfil.php"); // Redirecting To Other Page
} else {
//echo"Contraseña y/o email incorrectos";
echo '<script type="text/javascript"> 	$("#add_err").html("<p>Compruebe que el email y la contraseña esten correctos</p>");</script>';
$error = "Email or Password Invalida";
}
mysql_close($connection); // Cerrando conexión
}

?>
