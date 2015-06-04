<?php
session_start(); // Empezando la sesión

// Define $useremail and $password
$useremail=$_POST['email'];//john@example.com
$password=$_POST['password'];//123456

$servername = "localhost";
$username2 = "alu4635";
$password2 = "5sw5CK";
$dbname = "alu4635";

// Estableciendo la conexión con el servidor, pasandole como parametros el servername, el user_id y la password y el nombre de la basedatos
//$connection = new mysqli($servername, $username2, $password2, $dbname);
$connection = mysql_connect($servername, $username2, $password2) or die("Could not connect database");
mysql_select_db($dbname, $connection) or die("Could not select database");
// Para proteger de inyección MySQL, para propositos de seguridad
$useremail = stripslashes($useremail);
$password = stripslashes($password);
$useremail = mysql_real_escape_string($useremail);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db($dbname, $connection);
// SQL query to fetch information of registerd users and finds user match.

$query = mysql_query("select * from MyGuests where password='".$password."' AND email='".$useremail."'", $connection);
//$qry = "SELECT *  FROM users WHERE email='".useremail."' AND password='".$password."' ";

// if ($result = mysqli_query($connection, $qry)) {
//    // printf("Select returned %d rows.\n", mysqli_num_rows($result));
//
//     /* free result set */
//
// }
//
// if($result === false) {
//     var_dump(mysqli_error($connection));
// }else{
//
//
// //$res = mysqli_query($con,$qry);
// $num_row = mysqli_num_rows($result);
// $row=mysqli_fetch_assoc($result);
// if( $num_row == 1 ) {
// 	echo 'true';
// 	$_SESSION['uName'] = $row['username'];
// 	$_SESSION['Id'] = $row['id'];
//
// 	}
// else {
// 	echo 'false';
// }
// }



$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$useremail; // Initializing Session
header("location: perfil.php"); // Redirecting To Other Page
} else {
$error = "Email or Password Invalida";
}
mysql_close($connection); // Cerrando conexión
}
}
?>
