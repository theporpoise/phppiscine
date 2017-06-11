<?php

session_start();

if ($_GET['login'] && $_GET['passwd'])
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}


?>

<html><body>
<form action="" align="middle" name="index.php">
  <div class="imgcontainer">
    <img src="https://www.drupal.org/files/images/security.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
	<br />
    <label><b>Username</b></label>
	<input type="text" value="<?php echo $_SESSION['login']?>" name="login">
	<br />
    <label><b>Password</b></label>
	<input type="password" name="passwd" value="<?php echo $_SESSION['passwd']?>">
	<br />

    <button type="submit" value="OK">Submit</button>
  </div>

</form>
</html></body>
