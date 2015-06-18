<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Llene ambos campos";
}
else
{
$servername="localhost";
$username="alu4635";
$password="5sw5CK";
$dbname="alu4635";
$email=$_POST['email'];
$password=$_POST['password'];

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_errno){
  die("Fallo la conexion : " . $conn->connect_error);
}


//$link = mysql_connect($servername,$username,$password) or die('No se pudo conectar a la base de datos');
//mysql_select_db($dbname) or die('No se ha podido seleccionar la base de datos');

$query=mysqli_query($conn, "SELECT * FROM MyGuests WHERE email='$email' AND password='$password'");
//$result=mysql_result($query) or die('Consulta fallida :' . mysql_error());
$rows=mysql_num_rows($query);
if( $num_row ==1 ) {

			echo 'true';
			$_SESSION['login_user']=$row['name'];

		}
		else{
			echo 'false';
		}

mysqli_close($conn);
}
?>
