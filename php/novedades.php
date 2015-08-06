<?PHP
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
$query ="SELECT * FROM PUBLICACION ORDER BY id_pu DESC LIMIT 5";
$novedades=mysql_query($query) or die(json_encode(array('type'=> 'error','text'=>"Error al hacer consulta" .mysql_error())));;

$jsondata= array();
$i=0;
if($novedades>=1)
{
  $jsondata['type']='suss';
  while($row=mysql_fetch_assoc($novedades))
  {
    $jsondata["novedad"][$i]=$row;
    $i++;

  }
  $output=json_encode($jsondata);
        die($output);

}else
{
  $output = json_encode(array('type'=>'error', 'text' => 'No se ha obtenido resultado'));
        	die($output);
}

mysql_close($connection); // Cerrando conexión

?>
