<?php
//session_start();
//Datos que recibe PHP desde el script
//echo "----Entre al registro.php----";
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$emailR=$_POST['emailR'];
$passwordR=$_POST['passwordR'];
$passwordR2=$_POST['passwordR2'];


//Datos para conectarse a la base de datos
$servername = "localhost";
$username2 = "alu4635";
$password2 = "5sw5CK";
$dbname = "alu4635";


//Conectando a la base de datos
$connection = mysql_connect($servername, $username2, $password2,$dbname) or die("Could not connect database :" . mysql_error());


//Seleccionando la base de datos
$db = mysql_select_db($dbname, $connection) or die("no se pudo seleccionar la base de datos : " . mysql_error());


//query para comprobar si el email ya esta en la BBDD
$query = mysql_query("SELECT * FROM USUARIO WHERE email='$emailR'", $connection) or die('Consulta fallida :' .mysql_error());
$rows = mysql_num_rows($query);
if ($rows == 1) {
echo "false"; // Falso, ya hay un usuario con ese email
} else {
//echo"Contraseña y/o email incorrectos";
$into = mysql_query("INSERT INTO USUARIO (nombre,apellidos,email,password) VALUES ('$nombre','$apellidos','$emailR','$passwordR')",$connection) or die('Ingreso fallido : ' . mysql_error());
echo "true";
//echo "Correo electronico o contraseña invalidos";
//echo '<script type="text/javascript"> 	$("#add_err").html("<p>Compruebe que el email y la contraseña esten correctos</p>");</script>';
//$error = "Email or Password Invalida";
}
mysql_close($connection); // Cerrando conexión





?>
