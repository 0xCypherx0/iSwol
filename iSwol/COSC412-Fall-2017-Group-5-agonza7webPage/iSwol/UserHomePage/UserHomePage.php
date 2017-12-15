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

                <li><a href="../../../game/iSwol-gamebranch/iSwol-gamebranch/game.php">Game</a></li>

                <li><a href="../../../contactUs/form.php">Contact Us</a></li>
                
                <li><a href="../../../map/map.php">Map</a></li>
                
                <li><a href="../../../programinfo/programinfo.php">Program's information</a></li>

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
        <div class="wrapper">
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
    </div>

    <script>

      function toggleSidebar() {
        document.getElementById("sidebar").classList.toggle('active');
      }  
    </script>
<table style="PADDING-TOP:50px; border: 2px solid black;width:100%">
    <tr>
<th><img src="C:/xampp/htdocs/iSwol/images/useranon.jpg" alt="User" align="middle" height="200px" width="200px" ></th> 
    </tr>
    <tr style="TOP:20px; text-align:left; font-size:+30; text-align:center;" >
<th><b> User Name: John Doe</br>ID: 42069</br>Sex: Male</br></b></th>
    </tr>
    <tr>
        <th style="padding-top:20px; padding-bottom:10px; font-size:+25px;"><b>This is where the description of the user would go</b></br></th>
        <tr> 
        
        <th style="Padding-left:300px; padding-right:300px; padding-bottom:25;"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim elit quis elit fringilla, eu condimentum risus fringilla. Morbi in sapien metus. Pellentesque tincidunt eros sed pharetra tempor. Vivamus dignissim dui ligula, non semper odio ornare eu. Sed tempus urna placerat ipsum hendrerit congue. In aliquam faucibus cursus. Aenean eget ex ut quam tincidunt semper nec ac ex. Vivamus quis gravida nisi.</b> </th>
    </tr>
    </tr>
<tr>
    <th style = "width:100%; text-align:center; font-size:+25"><b>Last Workout:</th>
    </tr>
    <tr>
    <th style="padding-TOP:20px;text-align:center;">
        <table style="top:20px; width:100%; border: 1px solid black; border-collapse:collapse;" >
            <tr>
            <th style="font-size:+20;"><a href="http://weighttraining.guide/wp-content/uploads/2016/10/Lever-Standing-Calf-Raise.png"><b>Standing Calf Raises</th>
            <th style="font-size:+20;"><b> 12 Reps - 340 lbs </br> 13 Reps - 450 lbs </br> 25 Reps - 540 lbs </b></th>
    </tr>
    <tr>
            <th style="text-align:center; font-size:+20;padding-top:20px;"><a href="http://weighttraining.guide/wp-content/uploads/2016/12/Machine-Fly-990x677.png"><b>Pectoral Fly</th>
            <th style="text-align:center; font-size:+20;padding-top:20px;"><b> 12 Reps - 160 lbs </br> 11 Reps - 180 lbs </br> 8 Reps - 200 lbs </b></th>
    </tr>
    <tr>
            <th style="text-align:center; font-size:+20;padding-top:20px;"><a href="http://weighttraining.guide/wp-content/uploads/2017/01/Incline-Dumbbell-Curl.png"><b> Incline Bicep Curls</th>
            <th style="text-align:center; font-size:+20;padding-top:20px;"><b> 10 Reps - 40 lbs </br> 10 Reps - 50 lbs </br> 6 Reps - 70 lbs </b></th>
    </tr>
        </table>
</tr>
    </table>


    <div class="footer-social-icons">
    <h4 class="_14">Follow us on</h4>
    <ul class="social-icons">
        <li><a href="https://www.facebook.com/iswol.net" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
    </ul>
</div>
</body>
</html>