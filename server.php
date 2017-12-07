<?php
    session_start();

    $username = "";
    $email = "";
    $errors = array();

    //connect to database
    $db = mysqli_connect('localhost:3360', 'root', 'no', 'iswol');

    //if the register button is clicked
    if (isset($_POST['register'])) 
    {
        $fname = mysqli_real_escape_string($db,$_POST['fname']);
        $lname = mysqli_real_escape_string($db,$_POST['lname']);        
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
        $actkey = mysqli_real_escape_string($db,$_POST['actKey']);

        //ensure that form fields are filled properly
        if(empty($fname)) {
            array_push($errors, "* First name is required"); //add error to errors array
        }
        if(empty($lname)) {
            array_push($errors, "* Last name is required"); //add error to errors array
        }
        if(empty($username)) {
            array_push($errors, "* Username is required"); //add error to errors array
        }
        if(empty($email)) {
            array_push($errors, "* Email is required"); //add error to errors array
        }
        if(empty($password_1)) {
            array_push($errors, "* Password is required"); //add error to errors array
        }
        if(empty($actkey)) {
            array_push($errors, "* Activation key is required"); //add error to errors array
        }
        if($password_1 != $password_2) {
            array_push($errors, "* Passwords do not match");
        }

        //if there are no errors, save user to database
        if(count($errors) == 0) {
            $password = md5($password_1); //encrypts password before storing in database
            $sql = "INSERT INTO student (ActKey,Fname,Lname,Email,Username,Password) 
                        VALUES ('$actkey','$fname','$lname', '$email','$username', '$password')";
            $result= mysqli_query($db,$sql);

            $_SESSION['username'] = $username;
            header('location: ../login/login.php'); //redirect to login page
        }
    }

    //log user in from login page
    if(isset($_POST['login'])) {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
        
        //ensure that forms fields are filled properly
        if(empty($email)) {
            array_push($errors, "* Email is required");
        }
        if(empty($password)) {
            array_push($errors, "* Password is required");
        }

        if(count($errors) == 0) {
            $password = md5($password); //encrypt password before comparing with that from database
            $query = "SELECT * FROM student WHERE Email='$email' AND Password='$password'";
            $result = mysqli_query($db, $query);
            if(mysqli_num_rows($result) == 1) {
                //log user in
                $_SESSION['username'] = $username;
                header('location: COSC412-Fall-2017-Group-5-agonza7webPage/iSwol/HomePage.php'); //redirect to home page
            }
             else {
                array_push($errors, "* Wrong email/password combination");                
            }
        }
    }

    //logout
    if(isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: ../login.php');
    }

?>