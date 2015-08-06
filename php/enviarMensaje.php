<?php
echo "entre en enviarMensaje.php";

$email=$_POST['email'];
$mensaje=$_POST['descripcion'];
$idPublicacion=$_POST['id_publicacion'];


//Datos para conectarse a la base de datos
$servername = "localhost";
$username2 = "alu4635";
$password2 = "5sw5CK";
$dbname = "alu4635";

//Conectando a la base de datos
$connection = mysql_connect($servername, $username2, $password2,$dbname) or die("Could not connect database :" . mysql_error());
//Seleccionando la base de datos
$db = mysql_select_db($dbname, $connection) or die("no se pudo seleccionar la base de datos : " . mysql_error());

$consultar="SELECT * FROM PUBLICACION WHERE id_pu='$idPublicacion'";
$query=mysql_query($consultar,$connection) or die("select error :" . mysql_error());
// die(json_encode(array('type'=> 'error','text'=>"No se pudo obtener el id_pu de la publicacion" .mysql_error())));;
$row= mysql_fetch_array($query);
$rowid=$row[fk_pu];

//------------------------------------------------
$mensajeTotal= $email.$mensaje;
$insert="INSERT INTO MENSAJE(fk_me,texto) VALUES('$rowid','$mensajeTotal')";
$into=mysql_query($insert,$connection) or die("into error :" . mysql_error());
// die(json_encode(array('type'=> 'error','text'=>"No se enviar el mensaje" .mysql_error())));;

if ($into) {
  echo "true";
  // $output = json_encode(array('type'=>'suss', 'text' => 'true'));
  //         die($output);
} else {
  echo "false";
  // $output = json_encode(array('type'=>'err', 'text' => 'false'));
  //         die($output);
}

mysql_close($connection); // Cerrando conexión
 ?>
