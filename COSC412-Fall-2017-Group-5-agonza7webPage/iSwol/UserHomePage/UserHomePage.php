<?php include('../../../server.php'); ?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    </head>

    <body>
    
    <header>
        <nav>
            <ul>
                <li><a href="UserHomePage.php">Home</a></li>
                
                <li><a href="../../../about/about.php">About</a></li>

                <li><a href="../../../contactUs/form.php">Contact Us</a></li>

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
                <li><a href="../../../login/login.php">Logout</a></li>
            <?php endif ?>
            </ul>
        </nav>
    </header>

    <div id="sidebar">
            <div class="toggle-btn" onclick="toggleSidebar()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul>
                <li><a href="../../../records/records.php">Check records</a></li>
                <li><a href="../../../searchExpert/searchExpert.php">Available experts</a></li>
                <li><a href="../../../coachinfo/coachinfo.php">Coaches information</a></li>
                <li><a href="../../../map/map.php">Map</a></li>
                <li><a href="../../../programinfo/programinfo.php">Program's information</a></li>

            </ul>
    </div>

    <script>

      function toggleSidebar() {
        document.getElementById("sidebar").classList.toggle('active');
      }  
    </script>
    
    </body>
</html>