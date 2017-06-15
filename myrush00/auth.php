<?php


function auth($login, $passwd)
{
	//if (!file_exists("../private") && !file_exists("../private/passwd"))
	//if (true)
	$file = '../private/passwd';
	if (!file_exists($file))
	{
		return false;

	}

	$myhashpw = hash('whirlpool', $passwd);
	$contents = unserialize(file_get_contents($file));

	foreach($contents as $key => $value)
	{
		if ($value['login'] == $login)
		{
			if ($value['passwd'] == $myhashpw)
				return (true);
		}
	}
	return (false);
}


?>
