<?php

$action = $_GET['action'];
$name = $_GET['name'];
$value = $_GET['value'];

if ($action == 'set' || $action == 'get' || $action == 'del')
{
	if ($action == 'set')
		setcookie($name, $value, time() + 3600, "/");  //expires in 1 hour
	else if ($action == 'del')
		setcookie($name, " ", time() - 3600, "/");  //already expired
	else if ($action == 'get' && $_COOKIE[$name])
	{
		echo $_COOKIE[$name] . "\n";
	}

}


?>
