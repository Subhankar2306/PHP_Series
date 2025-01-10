<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mypage2</title>
</head>
<body>
  <center>
    <?php
    session_start();
    $uname=$_SESSION['username'];
    $upass=$_SESSION['userpass'];

    echo "My data in second page: ".$uname;
    echo "<br>Password in next page: ".$upass;

    session_unset();
    session_destroy(); // By doing this we can't access the data next page in session

    ?>
  </center>
</body>
</html>