#!/usr/bin/php
<?php


$i = 0;
foreach ($argv as $key => $value)
{
	$i++;
	if ($i == 1) {
		continue;
	}
	echo "$value\n";
}


?>
