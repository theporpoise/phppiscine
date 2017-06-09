<?php

$path = '../img/42.png';
$data = file_get_contents($path);
$base64 = 'data:image/' . ';base64,' . base64_encode($data);

if ($_SERVER['PHP_AUTH_USER'] == NULL)
{
	header('Content-Type: text/html');
	header('WWW-Authenticate: Basic realm="My Realm"');
	header('HTTP/1.0 401 Unauthorized');
}

if ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'Ilovemylittleponey'){
	echo "<html><body>\nHello Zaz<br />\n<img src='$base64'>\n</body></html>\n";
} else {
	header('HTTP/1.0 401 Unauthorized');
	echo "<html><body>That area is accessible for members only</body></html>\n";
}


?>
