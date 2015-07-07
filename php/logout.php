<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: /html/inicio.php"); // Redirecting To Home Page
}
?>
