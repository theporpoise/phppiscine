<?php

$login = $_POST["login"];
$password = $_POST["oldpw"];
$submit = $_POST["submit"];
$newpassword = $_POST["newpw"];

$hash = hash('whirlpool', $password);
$newhash = hash('whirlpool', $newpassword);

$newarray = array(
	login => $login,
	passwd => $newhash,
);

if ($login && $password && $newpassword && ($submit == 'OK'))
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
	$flag = -1;
	foreach ($contents as $key =>$value)
	{
		if ($value['login'] == $login)
		{
			if ($value['passwd'] == $hash)
				$flag = $key;
			else
			{
				echo "ERROR\n";
				return ;
			}
		}

	}
	if ($flag > -1)
	{
		$contents[$flag] = $newarray;
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
