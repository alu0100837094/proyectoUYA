<?php
include('session.php');
echo "entre a publica.php";
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
echo "se asignaron las variables de forma correcta";
  //imagen
  $imagen=$_FILES['imagen']['tmp_name'];//contenido del archivo
  $nomimagen=$_FILES['imagen']['name'];//nombre
  $tipoimagen=$_FILES['imagen']['type'];//tipo
  $tamimagen=$_FILES['imagen']['size'];//tamaño
  //procesos de imagen
  $fp=fopen($imagen,'rb'); //abrimos el archivo binario "imagen" en modo lectura
  $contenido=fread($fp,$tamimagen);//lee el archivo hasta el tamaño de la imagen
  $contenido=addslashes($contenido);//Añadimos caracteres de escape
  fclose($fp); //cerramos el archivo


  //Conectando a la base de datos
  $connection = mysql_connect($servername, $username2, $password2,$dbname) or die("Could not connect database :" . mysql_error());


  //Seleccionando la base de datos
  $db = mysql_select_db($dbname, $connection) or die("no se pudo seleccionar la base de datos : " . mysql_error());


  // try
  // {
  //$query=mysql_query("INSERT INTO PUBLICACION(foto) VALUES('$contenido') ",$connection) or die('Ingreso de publicacion fallido : ' . mysql_error());
  $queryID=mysql_query("SELECT id FROM USUARIO WHERE email='$login_session'",$connection) or die("No se ha podido verificar el id del usuario" .mysql_error());
  $row= mysql_num_rows($queryID);
  echo "login_session" .$login_session;
  echo "query ID :" .$row;
  $query=mysql_query("INSERT INTO PUBLICACION(descripcion,zona,foto,precio,banho,habitaciones,fk_pu) VALUES ('$descripcion','$zona','$contenido','$precio','$banos','$dormitorios','$row') ",$connection) or die("Ingreso de publicacion fallido" .mysql_error());
  echo "true";

  // }catch(Exception $e)
  // {
  //   echo "Error:  " .$e;
  // }


mysql_close($connection); // Cerrando conexión



?>
