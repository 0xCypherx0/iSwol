<?php include('../server.php');?>

<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
		<!-- Website CSS style -->
        <link rel="stylesheet" href="style.css">
	
		<title>Register</title>
	</head>
	<body>
		<h5 style="text-align: center; font-size: 22px; color: #fff;">Register below</h5>
	
		<div class="container">
			<form  method="post" action="register.php">
				<!-- display validation errors here -->
				<?php include('../errors.php');?>
					<div class="form-input">
						<input type="text" name="fname" id="name"  placeholder="First Name"/>
					</div>

					<div class="form-input">
						<input type="text" name="lname" id="name"  placeholder="Last Name"/>
					</div>

					<div class="form-input">
						<input type="text" name="username" id="username"  placeholder="Enter your Username"/>
					</div>

					<div class="form-input">
						<input type="text" name="email" placeholder="Enter your Email"/>
					</div>

					<div class="form-input">
						<input type="password" name="password_1" id="password"  placeholder="Enter your Password"/>
					</div>
					<div class="form-input">
						<input type="password" name="password_2" id="confirm"  placeholder="Confirm your Password"/>
					</div>

					<div class="form-input">
						<input type="text" name="actKey" id="password"  placeholder="Activation Key"/>
					</div>
			
					<div>
						<button class="regBtn" type="submit" name="register">Register</button>
					</div>
					
					<p>
						Already a member? <a href="../login/login.php">Sign in</a>
					</p>
				</div>
			</form>
		</div>
	</body>
</html>