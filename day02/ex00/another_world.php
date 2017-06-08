#!/usr/bin/php
<?php
function ft_split($str)
{
	return preg_split('/\s+/', trim($str));
}
if (!$argv[1])
{
	return;
}
$myarray = ft_split($argv[1]);
$i = 1;
foreach (ft_split($argv[1]) as $word)
{
	echo "$word";
	if ($i == sizeof($myarray))
	{
		echo "\n";
		break;
	}
	echo " ";
	$i++;
}
?>
