<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: /alu4635/html/inicio.php"); // Redirecting To Home Page
}
?>
