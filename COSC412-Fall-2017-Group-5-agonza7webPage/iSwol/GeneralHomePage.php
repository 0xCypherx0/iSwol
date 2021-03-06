<?php include('../../server.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>iSwoll</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style2.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


</head>

<body>

    <header>
        <img src="spartan.png" ; height="110px" ; width="380px" ;>

    </header>

    <nav>
        <ul>
            <a href="HomePage.php">
                <li>Home</li>
            </a>
            </a>
            <a href="#">
                <li>Register</li>
            </a>
            <a href="#">
                <li>About</li>
            </a>
            <a href="#">
                <li>Contact Us</li>
            </a>

            <i class="fa fa-unlock-alt"></i>
            <a href="#" id="login">
                <li>Log in</li>
            </a>

            <div class="arrow-up"></div>
            </aside>
        </ul>
        <div class="handle">Menu</div>
    </nav>

    <div class="sideright">

        <h2>Important Resources</h2>

        <p> Check Your Records </p>
        <p> Available experts </p>
        <p> Coaches' information </p>
        <p> Map </p>
        <p> Program's Information </p>

    </div>

    <div class="homePage">
        Imagine yourself in Gold's Gym in Venice, California, in 1968. It's a sunlit room lined with bricks and packed with well-loved benches, dumbbells, and barbells all being put to use. Everywhere you look, you see broad shoulders, narrow waists, and massive
        arms. But your eye keeps returning to one tall, mop-headed young guy as he does heavy dumbbell pull-overs barefoot on a bench. </p>
        <img src="arnold1.jpeg" align="right" margin="5px" height="330px" width="350" style="padding: 10px" alt="Arnold's Rules of Sucess"></p>

        You nudge the blond bodybuilder to your left and ask who that is. "Arnold? He's the <br> big kid with muscles and an odd accent from Europe," he says. "He won <br> bodybuilding contests over there—Germany, I think—and dresses funny. Looks like
        <br>he learned to lift at Camp Munich." That's how Dave Draper recalled his early perception of Arnold in an interview with Bodybuilding.com in 2008. But all ribbing aside, he and the other Venice Beach boys knew even then that Arnold was on a
        trajectory all his own.
        </p>"We liked him, helped him, taught him by not teaching him, and watched him grow and grow," Draper recalled. "The rumble you heard in the background was bodybuilding in its early stages of take-off. Five, Four, Three, Two, One..." </p>
        Now it's your turn to take off. Over the next eight weeks, you're going to train and eat like Arnold in the days when he was forging the physique that introduced bodybuilding to the mainstream. But that's not all. You're going to steep yourself in his
        legend, in the form of stories, videos, and lore from Arnold and the training partners who knew him best. If you think Arnold's Blueprint is just an arrangement of reps and sets, you need a lesson in what truly made him the greatest of all time.
    </div>

    <script>
        $('.handle').on('click', function() {
            $('nav ul').toggleClass('showing');
        });
    </script>

</body>

</html>