<?php
include('session.php');
//echo "entre a publica.php";
//Datos para conectarse a la base de datos
$servername = "localhost";
$username2 = "alu4635";
$password2 = "5sw5CK";
$dbname = "alu4635";

$zona=$_POST['zona'];
$precio=$_POST['precio'];
$dormitorios=$_POST['dormitorios'];
$banos=$_POST['banos'];
$descripcion=$_POST['descripcion'];

// $zona = filter_var($_POST["zona"], FILTER_SANITIZE_STRING);
// $precio = filter_var($_POST["precio"], FILTER_SANITIZE_EMAIL);
// $dormitorios = filter_var($_POST["dormitorios"], FILTER_SANITIZE_NUMBER_INT);
// $banos = filter_var($_POST["banos"], FILTER_SANITIZE_NUMBER_INT);
// $descripcion = filter_var($_POST["descripcion"], FILTER_SANITIZE_STRING);


//echo "se asignaron las variables de forma correcta";
  //imagen
  // $imagen=$_FILES['imagen']['tmp_name'];//contenido del archivo
  // $nomimagen=$_FILES['imagen']['name'];//nombre
  // $tipoimagen=$_FILES['imagen']['type'];//tipo
  // $tamimagen=$_FILES['imagen']['size'];//tamaño
  // echo "variables de imagen -->" .$imagen;
  // //procesos de imagen
  // $fp=fopen($imagen,'rb'); //abrimos el archivo binario "imagen" en modo lectura
  // $contenido=fread($fp,$tamimagen);//lee el archivo hasta el tamaño de la imagen
  // $contenido=addslashes($contenido);//Añadimos caracteres de escape
  // fclose($fp); //cerramos el archivo
$file_attached = false;
if(isset($_FILES['imagen'])) //check uploaded file
{
	//get file details we need
	$file_tmp_name 	= $_FILES['imagen']['tmp_name'];
	$file_name 		  = $_FILES['imagen']['name'];
	$file_size 		  = $_FILES['imagen']['size'];
	$file_type 		  = $_FILES['imagen']['type'];
	$file_error 	  = $_FILES['imagen']['error'];

	//exit script and output error if we encounter any
	if($file_error>0)
	{
		$mymsg = array(
		1=>"The uploaded file exceeds the upload_max_filesize directive in php.ini",
		2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
		3=>"The uploaded file was only partially uploaded",
		4=>"No file was uploaded",
		6=>"Missing a temporary folder" );

		$output = json_encode(array('type'=>'error', 'text' => $mymsg[$file_error]));
		die($output);
	}

	//read from the uploaded file & base64_encode content for the mail
	$handle = fopen($file_tmp_name, "r");
	$content = fread($handle, $file_size);
	fclose($handle);
	$encoded_content = chunk_split(base64_encode($content));
	//now we know we have the file for attachment, set $file_attached to true
	$file_attached = true;
}
if($file_attached) //continue if we have the file
{

//Conectando a la base de datos
$connection = mysql_connect($servername, $username2, $password2,$dbname) or die("Could not connect database :" . mysql_error());


//Seleccionando la base de datos
$db = mysql_select_db($dbname, $connection) or die("no se pudo seleccionar la base de datos : " . mysql_error());


// try
//
//$query=mysql_query("INSERT INTO PUBLICACION(foto) VALUES('$contenido') ",$connection) or die('Ingreso de publicacion fallido : ' . mysql_error());
$queryID=mysql_query("SELECT id FROM USUARIO WHERE email='$login_session'",$connection) or die("No se ha podido verificar el id del usuario" .mysql_error());
$row= mysql_num_rows($queryID);
// echo "login_session" .$login_session;
//echo "query ID :" .$row;
// echo "imagen : --> " .$encoded_content;
$query=mysql_query("INSERT INTO PUBLICACION(descripcion,zona,foto,precio,banho,habitaciones,fk_pu) VALUES ('$descripcion','$zona','$encoded_content','$precio','$banos','$dormitorios','$row') ",$connection) or die("Ingreso de publicacion fallido" .mysql_error());
// echo "true";
$output = json_encode(array('type'=>'suss', 'text' => 'true'));
        die($output);
}else
{
// echo "false --->else del file_attach"
$output = json_encode(array('type'=>'error', 'text' => 'Could not .'));
        die($output);
}
// }catch(Exception $e)
// {
//   echo "Error:  " .$e;
// }


mysql_close($connection); // Cerrando conexión



?>
