<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page2</title>
</head>
<body>
  <center>
    <?php
    $user=$_COOKIE['username'];
    $pass=$_COOKIE['password'];
    echo "User Name is Second Page:".$user;
    echo "</br>Password in Second Page:".$pass;
    ?>
  </center>
</body>
</html>