<?php
session_start();
$servername="localhost";
$username="alu4635";
$password="5sw5CK";
$dbname="alu4635";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("Fallo la conexion : " .$conn->connect_error);
}

$query= 'SELECT * from MyGuests WHERE email='.$' ';



?>
