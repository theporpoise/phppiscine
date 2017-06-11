<?php

$login = $_POST["login"];
$password = $_POST["passwd"];
$submit = $_POST["submit"];

$hash = hash('whirlpool', $password);

$newarray = array(
	login => $login,
	passwd => $hash,
);

if ($login && $password && ($submit == 'OK'))
{
	if (!file_exists ("../private"))
		mkdir("../private");
	if (!file_exists("../private/passwd"))
		file_put_contents("../private/passwd", null);

	$file = '../private/passwd';
	$contents = unserialize(file_get_contents($file));
	if (!$contents)
		$contents = array();

	//check if username already exists
	$flag = 0;
	foreach ($contents as $key =>$value)
	{
		if ($value['login'] == $login)
			$flag = 1;
	}
	if (!$flag)
	{
		$contents[] = $newarray;
		file_put_contents($file, serialize($contents));
	}
	else
	{
		echo "ERROR\n";
		return;
	}

	echo "OK\n";
}
else
	echo "ERROR\n";

?>
