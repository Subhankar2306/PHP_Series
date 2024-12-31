<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Constant_In_PHP</title>
</head>
<body>
  <center>
    <?php
      define('PI', 3.14);
      $r=12.24;
      $a= PI*($r*$r);
      $b=2*PI*$r;
      echo "Area of circle is:".$a;
      echo"<br>Circumference of circle: ".$b;
    ?>
  </center>
</body>
</html>