#!/usr/bin/php
<?php

function ft_split($str)
{
	return preg_split('/\s* \s*/', trim($str));
}

$stack = [];

foreach ($argv as $key => $value)
{
	if ($key == 0)
		continue;
	foreach (ft_split($argv[$key]) as $word)
		array_push($stack, $word);
}

sort($stack);

foreach ($stack as $word)
	echo "$word\n";

?>
