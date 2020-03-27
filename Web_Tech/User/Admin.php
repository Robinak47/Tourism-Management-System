<?php
	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:login.php");
	}
?>

<html>
	<head><title>ADMIN PAGE</title></head>
	<body>
		Welcome <?php echo $_SESSION['loggedinuser'];?>

		<input type="button" value="Logout" onClick="<?php session_destroy();?> location.href='login.php'">
	</body>
</html>