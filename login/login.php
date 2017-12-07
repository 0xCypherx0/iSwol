<?php include('../server.php'); ?>

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