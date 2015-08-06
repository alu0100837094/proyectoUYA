<?php
session_start();

$idPublicacion=$_POST['id_publicacion'];
$email=$_POST['email'];
$mensaje=$_POST['descripcion'];
// $output = json_encode(array('type'=>'err', 'text' => "recibiendo :".$email.$mensaje.$idPublicacion));
//         die($output);

//Datos para conectarse a la base de datos
$servername = "localhost";
$username2 = "alu4635";
$password2 = "5sw5CK";
$dbname = "alu4635";

//Conectando a la base de datos
// $connection = mysql_connect($servername, $username2, $password2,$dbname) or die(json_encode(array('type'=> 'error','text'=>"Could not connect database :" . mysql_error())));
$connection = mysql_connect($servername, $username2, $password2,$dbname) or die("Could not connect database :" . mysql_error());


//Seleccionando la base de datos
// $db = mysql_select_db($dbname, $connection) or die(json_encode(array('type'=> 'error','text'=>"no se pudo seleccionar la base de datos : " . mysql_error())));
$db = mysql_select_db($dbname, $connection) or die("no se pudo seleccionar la base de datos : " . mysql_error());

//------------------------------------------------
$consultar="SELECT fk_pu FROM PUBLICACION WHERE id_pu='$idPublicacion'";
$queryID=mysql_query("SELECT fk_pu FROM PUBLICACION WHERE id_pu='$idPublicacion'",$connection) or die("No se pudo obtener el fk_pu:" . mysql_error());
// die(json_encode(array('type'=> 'error','text'=>"No se pudo obtener el id_pu de la publicacion" .mysql_error())));;
$row= mysql_fetch_array($queryID);
$rowid=$row[fk_pu];
// $output = json_encode(array('type'=>'err', 'text' => $idPublicacion));
//         die($output);

//------------------------------------------------
$insert="INSERT INTO MENSAJE(fk_me,texto,emailC) VALUES('$rowid','$mensaje','$email')";
$into=mysql_query($insert,$connection) or die("No se pudo insertar el mensaje:" . mysql_error());
// die(json_encode(array('type'=> 'error','text'=>"No se enviar el mensaje: rowid=" .$rowid .mysql_error())));;

if ($into) {
  echo "true";
  // $output = json_encode(array('type'=>'suss', 'text' => 'true'));
  //         die($output);
} else {
  echo "false";
  // $output = json_encode(array('type'=>'err', 'text' => 'false'));
  //         die($output);
}


mysql_close($connection);

?>
