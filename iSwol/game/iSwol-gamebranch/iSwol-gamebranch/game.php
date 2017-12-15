<?php include('../../../server.php'); ?>

<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <title>Alien Invasion</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
</head>
<body>
  <header>
          <nav>
              <ul>
                  <li><a href="../../../COSC412-Fall-2017-Group-5-agonza7webPage/iSwol/UserHomePage/UserHomePage.php">Home</a></li>
                  
                  <li><a href="../../../about/about.php">About</a></li>

                  <li><a href="#">Game</a></li>

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
  <div id='container'>
    <canvas id='game' width='320' height='480'></canvas>
  </div>
  <script src='engine.js'></script>
  <script src='game.js'></script>
</body>
</html>


