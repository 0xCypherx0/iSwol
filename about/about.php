<?php include('../server.php'); ?>

<!DOCTYPE html>

<link rel="stylesheet" href="style.css" type="text/css">

<html>
    <header>
        <nav>
            <ul>
                <li><a href="../COSC412-Fall-2017-Group-5-agonza7webPage/iSwol/UserHomePage/UserHomePage.php">Home</a></li>
                
                <li><a href="#">About</a></li>

                <li><a href="../contactUs/form.php">Contact Us</a></li>

                <?php if (isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
            <?php endif ?>

            <?php if(isset($_SESSION["username"])): ?>
                <li><a href="../login/login.php">Logout</a></li>
            <?php endif ?>
            </ul>
        </nav>  
    </header>

    <body>

    </body>
</html>