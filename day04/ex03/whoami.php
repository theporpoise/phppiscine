<?php
session_start();
$who = $_SESSION['loggued_on_user'];

//if (!$who || $who == "")
if (!$who)
	echo "ERROR\n";
else
	echo "$who\n";


?>
