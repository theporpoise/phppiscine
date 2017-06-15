<?PHP
session_start();

echo $_SESSION['button_1'];
?>

<html>
	<head>
		<title>Cart</title>
	</head>
	<body>
		<div style="margin-left: auto; margin-right: auto; max-width: 1280px min-width:840px;">
			<h1>Here are the items in your cart:</h1>
<?PHP;
			if ($_SESSION['cart'] > 0)
			{
				echo $_SESSION['cart'];
				echo "ok";
			}
			else
				echo 'There are no items in your cart. Try adding something to your cart in the <a href=site.php>Market</a>.';
?>
</body>
</html>
