<?php
session_start();
$idPublicacion=$_POST['idParaConsulta'];


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
$getId="SELECT * FROM PUBLICACION WHERE id_pu='$idPublicacion'";
$consulta1=mysql_query($getId,$connection) or die(json_encode(array('type'=> 'error','text'=>"consultar el id" .mysql_error())));;
$row=mysql_num_rows($consulta1);
$idUsuario=$row[fk_pu];
$query="SELECT * FROM  USUARIO WHERE id='$idUsuario' ";
$consulta2=mysql_query($query,$connection) or die(json_encode(array('type'=> 'error','text'=>"consultar el email" .mysql_error())));;
$row2=mysql_num_rows($consulta2);
$jsondata= array();
if($row2>=1)
{
  $jsondata['type']='suss';
  $jsondata['email']=$row2[email];
  $output=json_encode($jsondata);
        die($output);


}else {
  # code...
  $output = json_encode(array('type'=>'error', 'text' => 'No se ha obtenido resultado'));
          die($output);
}




mysql_close($connection);

?>
