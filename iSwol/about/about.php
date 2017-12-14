<?php include('../server.php'); ?>

<!DOCTYPE html>

<link rel="stylesheet" href="style.css" type="text/css">

<html>

    <body>
    <header>
            <nav>
                <ul>
                    <li><a href="../COSC412-Fall-2017-Group-5-agonza7webPage/iSwol/UserHomePage/UserHomePage.php">Home</a></li>
                    
                    <li><a href="#">About</a></li>

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
<div class="about">
        <div>
            <h1 style="text-align:center;"><text-color="red"><font-size="+60">About Us</h1>
        </div>
        <div style="display:inline;">
                <div style="font-size:+50;color:red; text-align:center">Welcome fellow athlete's</div>
                <div style="color:#ebebeb; font-size:+25;text-align:center;">iSwol Technologies is currently a start up Web Developing company founded by Towson University Students.</br> Montrell Jubilee</br> James Ream</br> Andy Campos</br> Darian Hegberg, and</br> Abdoulkarim Dambo</br> 
                On August 31st, 2017. Here at iSwol, our primary mission is to create simplistic, efficient, and graphically appealing web  applications for our customers to utilize.
</div>
            </div>
            <table style="PADDING-TOP:50px;width:100%">
    <tr>
<th><img src="../COSC412-Fall-2017-Group-5-agonza7webPage/iSwol/spartan.png" alt="User" align="middle" height="300px" width="640px" ></th> 
</tr>
</table>
<br><br>
<div style="font-size:+45;color:red; text-align:center">Scenario!!</div>
</br>
        <div>
            <p style="text-align:center; margin-top: 10px; font-size:+25;color:#ebebeb">  A recent study led by the U.S. Department of Education, in coordination with representatives from each state’s board of education and a team of world-renowned health, fitness and nutrition professionals, has revealed that today’s teen athletes and their parents/guardians are greatly lacking in sufficient knowledge to ensure that the young athlete has the proper nutrition and fitness routine to support the increasingly rigorous training required by high school athletic programs. As a result, these young athletes are not optimizing their potential on the sports fields through proper off-season training as well as developing healthy nutritional habits. Some athletes even experience health issues and injuries!
Congress acknowledged the importance of youth athletic programs for a vast multitude of reasons and, as a result of this study, made the decision to allocate a generous budget to the DOE to further explore a solution to the issue.  They have a team of individuals from the original study in charge of the effort.  This team of experts (aka Subject Matter Experts or SMEs) has decided that engaging today’s teens in some type of subscription-based online gaming system would be the ideal solution to the problem.  They are currently soliciting proposals from reputable web development companies throughout the country for potential solutions.  This team fully admits that while they are experts in their respective fields that they are lacking when it comes to the latest technology, and they have stressed how vital it is that the solution be easy to use.  
The general purpose of the website would be to create a fun, interactive learning environment for teens to become more aware of what they should be doing to maximize their performance in a given sport.  
 </p>
 <br/>
        </div>

          
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