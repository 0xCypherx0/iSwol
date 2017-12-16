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
        <nav class="menu">
            <ul>
                <li><a href="UserHomePage.php">Home</a></li>
                
                <li><a href="../../../about/about.php">About</a></li>

                <li><a href="../../../game/iSwol-gamebranch/iSwol-gamebranch/game.php">Game</a></li>

                <li><a href="../../../contactUs/form.php">Contact Us</a></li>
                
                <li><a href="../../../map/map.php">Map</a></li>
                
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
            <form class="search-form">
                    <input type="text" placeholder="Search">
                    <button>Search</button>
            </form>

        </nav>
    </header>

    <div>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="Q7AZ55WSJJBAJ">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>

            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="MH8WG9X2QT7PL">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
        </div>   
    
</body>
</html>