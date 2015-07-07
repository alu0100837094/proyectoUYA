<?php
session_start();
echo "entre a buscar.php";
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
$username2 = "alu4348";
$password2 = "0Cu1zx";
$dbname = "alu4348";


//Conectando a la base de datos
$connection = mysql_connect($servername, $username2, $password2,$dbname) or die("Could not connect database :" . mysql_error());


//Seleccionando la base de datos
$db = mysql_select_db($dbname, $connection) or die("no se pudo seleccionar la base de datos : " . mysql_error());


//query para comprobar si el email ya esta en la BBDD
$into = mysql_query("SELECT * FROM MIPISO WHERE ZONA='$zona' AND PRECIO>='$precio_d' AND PRECIO<='$precio_h' AND HABITACION='$dormitorios' AND BANOS='$banos'",$connection) or die('Consulta fallida : ' . mysql_error());
$row= mysql_num_rows($into);
if($row >= 1) {
	
echo "true";
/* Desplegamos cada uno de los registros dentro de una tabla */  
echo "<table class='table table-striped' >";

/*Priemro los encabezados*/
 echo "<tr>
         <th colspan=5>RESULTADOS DE BUSQUEDA </th>
       <tr>
	 <th>Zona</th>
	 <th>Precio</th>
         <th> Habitaciones </th>
         <th> Banos </th>
	<th> Favoritos</th>
      </tr>";

/*Y ahora todos los registros */
while($row=mysql_fetch_array($into))
{
 echo "<tr>
         <td td class='active'> $row[ZONA]</td>
         <td> $row[PRECIO] </td>
         <td> $row[HABITACION] </td>
         <td> $row[BANOS] </td>
         <td>

<button type='button' class='btn btn-default btn-lg'>
  <span class='glyphicon glyphicon-star' aria-hidden='true'></span> Favorito
</button></td>
      </tr>";
}
echo "</table>";
}else{
echo "false";
}
//echo "Correo electronico o contraseña invalidos";
//echo '<script type="text/javascript"> 	$("#add_err").html("<p>Compruebe que el email y la contraseña esten correctos</p>");</script>
//$error = "Email or Password Invalida";

mysql_close($connection); // Cerrando conexión





?>
