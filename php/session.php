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
$connection = new mysqli($servername, $username2, $password2, $dbname);
// Selecting Database
$db = mysql_select_db($dbname, $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"SELECT * FROM USUARIO WHERE email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['email'];
$id_session=$row['id'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: ../html/inicio.php'); // Redirecting To Home Page
}
?>
