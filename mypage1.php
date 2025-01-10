<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check Session</title>
</head>
<body>
  <center>
    <?php
    $user=$_POST['txtuser'];
    $pass=$_POST['txtpass'];
    echo " User id is: ".$user;
    echo "</br>User Password is :".$pass;

      session_start();
      $_SESSION['username']=$user;
      $_SESSION['userpass']=$pass;
    ?>
    <form method=post action="mypage2.php">
      <input type="submit" value ="Submit">
    </form>
  </center>
</body>
</html>