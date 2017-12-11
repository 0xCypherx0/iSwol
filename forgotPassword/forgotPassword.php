<?php  
    session_start();
    $msg = " ";

    //connect to database
    $db = mysqli_connect('localhost:3360', 'root', 'no', 'iswol') or die (mysql_error());

    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $query = "SELECT * FROM student WHERE Email = '$email' ";
        $data = mysqli_query($db,$query);

        if(!empty($_POST['email']) && mysqli_fetch_assoc($data) > 0 && !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL == false)) {
            $_SESSION['info'] = $_POST['email'];
            header("location: info.php");
        }

        if(empty($_POST['email'])) {
            $msg = "Enter your email";
        } else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL == true)) {
            $msg = "Invalid email"; 
        } else if(mysqli_fetch_assoc($data < 1)) {
            $msg = "That email does not exist";
        }
    
    }

?>

<!DOCTYPE html>
<html>
    <body>

        <?php 
            echo $msg;
        ?>

        <form method="post">
            <h1>Forgot Password</h1>
        
            <label>Email</label>
            <input placeholder=" Enter email" name="email"></input>
            <input type="submit" name="submit" value="Submit"></input>
        </form>
    </body>
</html>