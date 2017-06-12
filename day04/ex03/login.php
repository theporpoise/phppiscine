<?php
session_start();

$login = $_GET["login"];
$password = $_GET["passwd"];


include 'auth.php';

if (auth($login, $password))
{
	$_SESSION['loggued_on_user'] = $login;
	echo "OK\n";
}
else
{
	$_SESSION['loggued_on_user'] = "";
	echo "ERROR\n";
}

?>
