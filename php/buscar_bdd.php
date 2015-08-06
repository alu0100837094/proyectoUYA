<?php
session_start();

//Datos que recibe PHP desde el script
//echo "----Entre al registro.php----";
//$nombre=$_POST['nombre'];
//$apellidos=$_POST['apellidos'];
//$emailR=$_POST['emailR'];
//$passwordR=$_POST['passwordR'];
$passwordR2=$_POST['passwordR2'];

$zona=$_POST['zona_buscar'];
$precio_d=$_POST['precio_buscar_d'];
$precio_h=$_POST['precio_buscar_h'];
$dormitorios=$_POST['dormitorios'];
$banos=$_POST['banos'];
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

//query para comprobar si el email ya esta en la BBDD
$into = mysql_query("SELECT * FROM PUBLICACION WHERE zona REGEXP '$zona' AND precio>='$precio_d' AND precio<='$precio_h' AND habitaciones REGEXP '$dormitorios' AND banho REGEXP '$banos'",$connection) or die(json_encode(array('type'=> 'error','text'=>"Error al hacer consulta" .mysql_error())));

// $row2=mysql_num_rows($into);
// $idid=$row2[id_pu];
// $queryFoto=mysql_query("SELECT * FROM FOTO WHERE fk_fo='$$idid'",$connection) or die(json_encode(array('type'=> 'error','text'=>"Error al hacer consulta" .mysql_error())));;
// $rowfoto=mysql_num_rows($queryFoto);
$cantidad=mysql_num_rows($into);
$jsondata= array();
  $i=0;
  if($cantidad>=1)
  {
    $jsondata['type']='suss';
    while($row=mysql_fetch_assoc($into))
    {
      //$jsondata['urlFoto']=$rowfoto['url_foto'];
      $jsondata["busqueda"][$i]=$row;
      $i++;

    }
    $output=json_encode($jsondata);
          die($output);

  }else
  {
    $output = json_encode(array('type'=>'error', 'text' => 'No se ha obtenido resultado'));
          	die($output);
  }

//echo "Correo electronico o contraseña invalidos";
//echo '<script type="text/javascript"> 	$("#add_err").html("<p>Compruebe que el email y la contraseña esten correctos</p>");</script>
//$error = "Email or Password Invalida";

mysql_close($connection); // Cerrando conexión





?>
