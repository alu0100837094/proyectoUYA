<?php
$servername = "localhost";
// $username2 = "alu4348";
// $password2 = "0Cu1zx";
// $dbname = "alu4348";
$username2 = "alu4635";
$password2 = "5sw5CK";
$dbname = "alu4635";
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysql_connect($servername, $username2, $dbname);
$connection = new mysqli($servername, $useremail, $password, $dbname);
// Selecting Database
// $db = mysql_select_db("MyGuests", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from MyGuest where email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['email'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: perfil.php'); // Redirecting To Home Page
}
?>
