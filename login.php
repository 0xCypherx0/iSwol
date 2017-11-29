<?php include('server.php'); 

    //Connect to database
    $db = mysqli_connect('localhost:3360', 'root', 'no', 'iswol');

    //Checks if there is a valid user and retrieves them from database.
    if(isset($_POST['email']) && isset($_POST['password'])) {
        $inputEmail = $_POST['email'];
        $inputPass = $_POST['password'];
                
        $query = "SELECT * FROM `Student` WHERE `Email` = `$inputEmail`";
        $queryPass = "SELECT * FROM `Student` WHERE `Password` = `$inputPass`";
        $result = mysqli_query($db,$query);
        $resultPass = mysqli_query($db,$queryPass);
        
        /*if(!$result || !$resultPass) {
            die("Username or password is invalid");
        }*/

        if($result == $row['email'] && resultPass == $row['password']) {
            header('Location: ../COSC412-Fall-2017-Group-5-agonza7webPage/iSwol/HomePage.html');
        }

        else {
            echo "Sorry, bad login";
        }

        mysqli_close($db);        
        
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
		</-- section starts here -->
		<section id ="home" style="background: url(images/background.jpg); background-size: 100% 100%;" class="cl_white text-center">
				<div class="col-md-6">
					<div class="page-header"><h3> Login </h3></div>
                    <form class="myForm" method="post" action="login.php">
						<div class="form-group"> 
                            <label>Email</label> 
							<input class="form-control" name="email" placeholder= "iSwol2much@somethingcool.com" type="text">
						</div>
						<div class="form-group"> 
                            <label>Password</label> 
							<input class="form-control" name="password" placeholder= "Enter Password" type="text">
						</div>
                        <div>
                            <button type="submit" name="login" class="btn">Login</button>
                        </div>
                        <p style="padding: 10px;">
                            Not yet a member? <a href="register/register.php">Sign up</a>
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