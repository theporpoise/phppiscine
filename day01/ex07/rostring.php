#!/usr/bin/php
<?php

function ft_split($str)
{
	return preg_split('/\s* \s*/', trim($str));
}

$myarray = ft_split($argv[1]);
$first = array_shift($myarray);
array_push($myarray, $first);

foreach ($myarray as $key => $word)
{
	echo "$word";
	if ($key == (sizeof($myarray) - 1))
	{
		break;
	}
	echo " ";
	$i++;
}

echo "\n";

?>
