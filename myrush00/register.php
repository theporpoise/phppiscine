<?php
$errorMessage = "Please login, if you don't have an account enter a username and password to have one created for you";
$success = 0;
$login = $_POST["login"];
$password = $_POST["passwd"];
$submit = $_POST["submit"];
$delete = $_POST["delete"];

$hash = hash('whirlpool', $password);

$newarray = array(
	login => $login,
	passwd => $hash,
	admin => 0,
);


session_start();
include 'auth.php';


if ($_SESSION['loggued_on_user'])
{
	;
}
else if ($login && $password && auth($login, $password))
{
	$_SESSION['loggued_on_user'] = $login;
}
else
{
	$_SESSION['loggued_on_user'] = "";
}


if ($_SESSION['loggued_on_user'] && !$delete)
{
	if (($_SESSION['loggued_on_user']) == 'joe');
	{
		$errorMessage = "You are already logged in";
	}
}
else if (isset($_POST['submit']))
{

	if ($login && $password && ($submit == 'OK'))
	{
		if (!file_exists ("../private"))
			mkdir("../private");
		if (!file_exists("../private/passwd"))
			file_put_contents("../private/passwd", null);

		$file = '../private/passwd';
		$contents = unserialize(file_get_contents($file));
		if (!$contents)
			$contents = array();

		//check if username already exists
		$flag = -1;
		foreach ($contents as $key =>$value)
		{
			if ($value['login'] == $login)
				$flag = $key;
		}
		if(($flag > -1) && $delete)
		{
			$errorMessage = 'User Deleted';
			unset($contents[$flag]);
			file_put_contents($file, serialize($contents));
			$_SESSION['loggued_on_user'] = "";
		}
		else if (($flag == -1))
		{
			if ($newarray['login'] == 'joe')
			{
				$newarray['admin'] = 1;
				$_SESSION['is_admin'] = 1;
			}
			$contents[] = $newarray;
			file_put_contents($file, serialize($contents));
			$_SESSION['loggued_on_user'] = $login;
			$errorMessage = 'Account Created';
		}
		else if (($flag > -1 && $login == 'joe'))
			$_SESSION['is_admin'] = 1;
		else
		{
			$errorMessage = 'Wrong Password';
		}
	}
	else
		$errorMessage = 'Invalid Input';

}

?>


<html>
	<body>
<form method="post">
  <div class="imgcontainer">
    <img src="https://www.drupal.org/files/images/security.png">
  </div>

<?php if ($errorMessage) echo $errorMessage; ?>

<?php if (!$_SESSION['loggued_on_user'])
	{
		echo '
		  <div class="container">
			<br />
			<label><b>Username</b></label>
			<input type="text" value="" name="login">
			<br />
			<label><b>Password</b></label>
			<input type="password" name="passwd" value="">
			<br />
<input type="checkbox" name="delete" value="TRUE">Delete Account<br>

			<button type="submit" value="OK" name="submit">Submit</button>
		  </div>';
	}
?>

<h1><a href="logout.php">LOGOUT</a></h1>
<h1><a href="site.php">HOME</a></h1>


<?php if ($_SESSION['is_admin'] == 1)
{
	echo '<h1><a href="admin.php">ADMIN</a></h1>';
}
else
	echo "no admin";
?>

</form>
</html></body>
