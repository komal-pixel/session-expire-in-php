<?php 
session_start();
if(! isset($_SESSION['email']))
{
	echo "<font>please login</font>";
	echo "<a href='index.php'>click here to login </a>";
}
else{
	$now= time();						//time will be calculate from the point of login
	if($now > $_SESSION['expire']){		// if present time is greater than expire time
		session_destroy();
		echo "your session hass been expired. <a href='index.php'> click here to login</a>";
	}
	else{

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div style="padding: 15% ;background-color:gray;color: white;">
	<div><a style="float:right;margin-right: 5px;" href="logout.php">logout</a></div>  <!-- if we want to logout before session expire -->
		<h1>welcome <?php echo $_SESSION['email'];?> </h1>
		<p>Your session will be expire after few time</p>
	</div>
<?php 
}
}?>
</body>
</html>