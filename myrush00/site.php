<?PHP
session_start();
$item = $_POST['button_1'];
echo "This is $item.";
?>

<html>
	<head>
		<title>Heavy Metal Katz</title>
		<link rel="stylesheet" href="site.css">
	</head>
	<body>
		<div id="nav">
			<div id="nav_wrapper"></div>
			<ul>
				<i><b>Heavy Metal Katz</b></i>
				<li><a href="https://coinmarketcap.com/">Who we are<IMG src="http://www.cospender.com/images/grey-arrows-down-2.png" /></a>
				<ul>
					<li><a href="https://www.linkedin.com/in/matthew-gould-7877361/">Matt Gould</a></li><li>
					<a href="https://www.linkedin.com/in/joseph-eftekhari-680648a0/">Joe Eftekhari</a></li>
				</ul>
				</li>
				<li><a href="register.php">Login</a></li>
				<li><a href="j_cart.php">Cart</a></li>
			</ul>
		</div>
	</div>
	<div id="bubs">
		<ul>
			<form method="post" name="site.php">
			<input type="submit" name="button_1" value="Add">
			<IMG src="http://3.bp.blogspot.com/-vgjqJWKQs3U/UnjvpgGaSeI/AAAAAAAADNw/FFAVliY8Jtg/s1600/catrocker.jpg" alt="Elvis Cat" style="width:304px;height:228px;" />
			<input type="submit" name="button_2" value="Add">
			<IMG src="https://s-media-cache-ak0.pinimg.com/736x/30/c8/86/30c88685f2234cec855f8a20f5be9d92.jpg" alt="Guitar Cat" style="width:304px;height:228px;" /></form>
		</ul>
	</div>
	</body>
</html>
