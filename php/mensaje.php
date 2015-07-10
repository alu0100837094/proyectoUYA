<?php
session_start();

$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

//Datos para conectarse a la base de datos
$servername = "localhost";
$username2 = "alu4635";
$password2 = "5sw5CK";
$dbname = "alu4635";

//Conectando a la base de datos
$connection = mysql_connect($servername, $username2, $password2,$dbname) or die(json_encode(array('type'=> 'error','text'=>"Could not connect database :" . mysql_error())));


//Seleccionando la base de datos
$db = mysql_select_db($dbname, $connection) or die(json_encode(array('type'=> 'error','text'=>"no se pudo seleccionar la base de datos : " . mysql_error())));

//------------------------------------------------

$insert="INSERT INTO MENSAJE(fk_me,texto) VALUES('$email','$mensaje')";
$into=mysql_query($insert,$connection) or die(json_encode(array('type'=> 'error','text'=>"No se enviar el mensaje" .mysql_error())));;
$row=mysql_num_rows($into);
$output = json_encode(array('type'=>'suss', 'text' => 'true'));
        die($output);
mysql_close($connection);

?>
