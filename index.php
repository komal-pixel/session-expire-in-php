<?php
session_start();
if(@$_POST['submit']){
	$email=$_POST['email'];
	$password=$_POST['password'];
	if($email=='komal-pixel@g.c' && $password == '123'){  //we can takevalue from user input
		$_SESSION['email']="$email";
		$_SESSION['password']="$password";
		$_SESSION['start']=time();							
		$_SESSION['expire']=$_SESSION['start'] +(1*60);		//session will expire in after one minute
		header('location:home.php');
	}
	else{
		$err="<font color='red'>Invalid user login </font>";
	}
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Session </title>
</head>
<body>
	<div style="padding: 15%;">
	<form method="post">
		<?php echo @$err;?><br>
		<label>Name : &nbsp;&nbsp;&nbsp;</label>
		<input type="email" name="email" placeholder="komal-pixel@g.c" required="true"> <br><br>
		<label>Password : </label>
		<input type="password" name="password" placeholder ="123" required="true"><br><br>
		<input type="submit" name="submit" value="submit">
	</form>
	</div>

</body>
</html>