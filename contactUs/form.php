<?php include('form-process.php');
      include('../server.php');
?>
<link rel="stylesheet" href="style.css" type="text/css">

<header>
        <nav>
            <ul>
                <li><a href="../COSC412-Fall-2017-Group-5-agonza7webPage/iSwol/UserHomePage/UserHomePage.php">Home</a></li>
                
                <li><a href="../about/about.php">About</a></li>

                <li><a href="../game/iSwol-gamebranch/iSwol-gamebranch/game.php">Game</a></li>

                <li><a href="#">Contact Us</a></li>

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
<div class="container">  
  <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h3>Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
      <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="text" name="url" value="<?= $url ?>" tabindex="4" >
      <span class="error"><?= $url_error ?></span>
    </fieldset>
    <fieldset>
      <textarea value="<?= $message ?>" name="message" tabindex="5">
      </textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success ?></div>
  </form>
</div>