<?php include('../server.php');

	//your values are stored in cookies, then you can login without validate
	if(isset($_COOKIE['name']) && isset($_COOKIE['pwd']))
	{
    	header('location:welcome.php');
	}
	// login validation in php
	if(isset($_POST['submit']))
	{
 		mysql_connect('localhost','root','') or die(mysql_error());
 		mysql_select_db('new')  or die(mysql_error());
 		$name=$_POST['name'];
 		$pwd=$_POST['pwd'];
 	if($name!=''&&$pwd!='')
 	{
   		$query=mysql_query("select * from login where name='".$name."' and password='".$pwd."' ")  or die(mysql_error());
   		$res=mysql_fetch_row($query);
   	if($res)
   	{
    if(isset($_POST['remember']))
 	{
   		setcookie('name',$name, time() + (60*60*24*1));
   		setcookie('pwd',$pwd, time() + (60*60*24*1));
 	}
    	$_SESSION['name']=$name;
   	 	header('location:welcome.php');
   	}
  	else
   	{
    	echo'You entered username or password is incorrect';
   	}
}
 else
 {
  echo'Enter both username and password';
 }
}
?>

<!DOCTYPE html>
<html>
	<head>
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery.js"></script>
	</head>
	
	<body>
		<div class="container">
            <form method="post" action="login.php">
				<!-- display validation errors here -->
				<?php include('../errors.php');?>
				<div class="form-input">  
					<input name="email" placeholder= "iSwol2much@somethingcool.com" type="text">
				</div>
				<div class="form-input">  
					<input name="password" placeholder= "Enter Password" type="password">
				</div>
            	<input type="submit" name="login" class="btn-login" value="Login"></input>						
				<a href="../forgotPassword/forgotPassword.php">Forgot password?</a>
				<p>Not yet a member? <a href="../register/register.php">Sign up</a></p>
			</form>
		</div>
	</body>
</html>