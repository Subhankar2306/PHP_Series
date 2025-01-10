<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <center>
    <?php
    $user=$_POST['txtuser'];
    $pass=$_POST['txtpass'];

    $ckname="username";
    $ckvalue=$user;
    $ckpass="password";
    $ckpassvalue= $pass;
      setcookie($ckname,$ckvalue);
      setcookie($ckpass,$ckpassvalue);

    echo "User Name :".$user;
    echo "</br>User Password :".$pass;
    ?>
    <form method=post action=page2.php>
      <input type="submit" value ="Submit">
    </form>
  </center>
</body>
</html>