#!/usr/bin/php
<?php


$fd = fopen ("php://stdin", "r");

while (true)
{
	echo "Enter a number: ";
	$line = fgets($fd);

	if (feof($fd))
	{
		echo "\n";
		return;
	}

	if (!is_numeric(trim($line,"\n")))
	{
		echo "'" . trim($line,"\n") . "'" . " is not a number\n";
	}
	else if (($line % 2) == 0)
	{
		echo "The number " . trim($line,"\n") . " is even\n";
	}
	else if (($line % 2) == 1)
	{
		echo "The number " . trim($line,"\n") . " is odd\n";
	}

}



?>
