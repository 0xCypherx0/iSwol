<html>
    <head>
        <style type="text/css">
        
        input{
                border:1px solid olive;
                border-radius:5px;
        }
        h1{
            color:darkgreen;
            font-size:22px;
            text-align:center;
        }
    
        </style>
    </head>

    <body>
        <h1>Forgot Password<h1>
        <form action='#' method='post'>
            <table cellspacing='5' align='center'>
                <tr><td>Email:</td><td><input type='text' name='mail'/></td></tr>
                <tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
            </table>
        </form>
    <?php

        

    if(isset($_POST['submit']))
    { 

    $db = mysqli_connect('localhost:3360', 'root', 'no', 'iswol');    

    $mail=$_POST['mail'];
    $q=mysqli_query($db,"SELECT * FROM student WHERE email='".$mail."' ") or die(mysqli_error($db));
    $p=mysqli_affected_rows($db);
    if($p!=0) 
    {  
      $res=mysqli_fetch_array($q);
      $to=$res['Email'];
      $subject='Remind password';
      $message='Your password : '.$res['Password']; 
      $headers='From:iswol412@gmail.com';
      $m=mail($to,$subject,$message,$headers);
      if($m)
      {
        echo'Check your inbox in mail';
      }
      else
      {
       echo'mail is not send';
      }
    }
    else
    {
      echo'Email was not found';
    }
    }
    ?>
    </body>
</html>
