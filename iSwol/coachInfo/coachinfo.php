<?php include('../server.php'); ?>

<!DOCTYPE html>
<html>
        <title>Coach information</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <body>
<header>
        <nav>
            <ul>
                <li><a href="../COSC412-Fall-2017-Group-5-agonza7webPage/iSwol/UserHomePage/UserHomePage.php">Home</a></li>
                
                <li><a href="../about/about.php">About</a></li>

                <li><a href="../game/iSwol-gamebranch/iSwol-gamebranch/game.php">Game</a></li>

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
</br>
<img src="C:/xampp/htdocs/iSwol/images/coach.jpg" alt="User" align="right" height="350px" width="510px" border="5px" hspace="20">
<div style="font-size:+70; color: #63ef0d; text-align:center;"><b> Coaching Services</b> </div>
<div style="font-size:+24; color:#ebebeb;">Professional coaching uses a range of communication skills (such as targeted restatements, listening, questioning, 
    clarifying etc.) to help clients shift their perspectives and thereby discover different approaches to achieve their goals.
</br></br>
Through a partnership between "iSwol" and respective local educational services we've managed to arrange coaching assistance to students participating in this program.
Additionally, in order to maintain a higher degree of familiarity, said coaching services will be provided by local coaches / instructors, ideally pertaining to the 
same school the respective child attends.
</br></br>
In order to facilitate answering general questions, providing medical assistance, or helping students, the following information has been set up:

</div>   
</br></br>
<table style="top:20px; width:70%; border: 1px solid black;" >
            <tr>
            <th style="font-size:+20;text-align:left;">Prof. Montrell Jubilee</br>Coach</br>Years of Experience: 17</br>School: Towson HS</th>
            <th style="font-size:+20;text-align:left;">Phone #: 410-###-####</br>E-mail: mJubilee12@towson.gov</br>Fax: ------</th>
    </tr>
</table>
        <table style="top:20px; width:70%; border: 1px solid black;" >
            <tr>
            <th style="font-size:+20;text-align:left;">Dr. James Ream</br>Physician</br>Years of Experience: 12</br>Insurance: BlueCross</th>
            <th style="font-size:+20;text-align:left;">Phone #: 443-###-####</br>E-mail: reamJames@BCross.gov</br>Fax: 703-420-6969</th>
    </tr>
</table>
<table style="top:20px; width:70%; border: 1px solid black;" >
            <tr>
            <th style="font-size:+20;text-align:left;">Dr. Darian Hegberg</br>Nutriologist</br>Years of Experience: 6</br>Insurance: Avesis Inc</th>
            <th style="font-size:+20;text-align:left; padding-left:20px;">Phone #: 410-###-####</br>E-mail: DarianHG@Avesis.gov</br>Fax: 703-101-####</th>
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