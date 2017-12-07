<?php include('../server.php');?>

<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Register</title>
	</head>
	<body style="background: url(../images/background.jpg); background-size: 100% 100%;" class="cl_white text-center">	
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5 style="text-align: center; font-size: 22px; color: grey;">Register below</h5>
					<form class="myForm" method="post" action="register.php">
                    <!-- display validation errors here -->
                    <?php include('../errors.php');?>
                        <div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<label>First Name</label>
									<input type="text" class="form-control" name="fname" id="name"  placeholder="First Name"/>
								</div>
							</div>
						</div>
 
						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<label>Last Name</label>
									<input type="text" class="form-control" name="lname" id="name"  placeholder="Last Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<label>Username</label>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<label>Email</label>
									<input type="text" class="form-control" name="email" placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password_1" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<label>Confirm Password</label>
									<input type="password" class="form-control" name="password_2" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>

						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<label>Activation Key</label>
									<input type="text" class="form-control" name="actKey" id="password"  placeholder="Activation Key"/>
								</div>
							</div>
						</div>

							<div>
								<button class = "regBtn" type="submit" name="register">Register</button>
                            </div>
                            
                            <p>
							    Already a member? <a href="../login/login.php">Sign in</a>
						    </p>
						</div>
					</form>
				</div>
			</div>
		</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>