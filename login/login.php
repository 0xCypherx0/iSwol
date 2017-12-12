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
        <title> Login Page </title>
        <link rel="stylesheet" href="login.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery.js"></script>
	</head>
	<style >
		.cl_white{
			color: white;
		}
		section{
			width: 100vw;
			height: 100vh;
			padding: 50px;
		}
	</style>
	<body>
		<!-- section starts here -->
		<section id ="home" style="background: url(../images/background.jpg); background-size: 100% 100%;" class="cl_white text-center">
				<div class="col-md-6">
					<div style="text-align: center; font-size: 22px; color: grey;"><h3> Login </h3></div>
                    <form class="myForm" method="post" action="login.php">
						<!-- display validation errors here -->
						<?php include('../errors.php');?>
						<div class="form-group"> 
                            <label>Email</label> 
							<input class="form-control" name="email" placeholder= "iSwol2much@somethingcool.com" type="text">
						</div>
						<div class="form-group"> 
                            <label>Password</label> 
							<input class="form-control" name="password" placeholder= "Enter Password" type="password">
						</div>
                        <div>
                            <button type="submit" name="login" class="btn">Login</button>
                        </div>
                        <p>
                            Not yet a member? <a href="../register/register.php">Sign up</a>
						</p>
						
						<p> <a href="../forgotPassword/forgotPassword.php">forgot password?</a> </p>

					</form>
				</div>
		</section>
		</-- footer starts here -->
		<footer class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
			<p class="text-center" style="padding: 12px;">Copyright iSwol Inc. 2017</p>
			</div>
		</footer>
	</body>
</html>