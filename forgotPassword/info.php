<?php
    session_start();
    
    //connect to database
    $db = mysqli_connect('localhost:3360', 'root', 'no', 'iswol') or die (mysql_error());

    //Declare variables
    $sql = "SELECT * FROM student WHERE Email = '".$_SESSION['info']."'";
    $sqlq = mysqli_query($db,$sql);
    $sqlqq= mysqli_fetch_assoc($sqlq);

    $p=$sqlqq['Password'];
    
    echo "Your password is " . $p;
?>