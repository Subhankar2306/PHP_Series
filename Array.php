<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array in PHP</title>
</head>
<body>
  <?php
    // $ar=array("Subha","Sakti","Rohit","Rahul",35.6, 38, TRUE, FALSE);  // Normal Array declaration // It is a collection of both homogeneous and heterogeneous Array
    // for($i=0; $i<count($ar); $i++)
    // {
    //   echo $ar[$i];
    //   echo "<br>";
    // }

    $ar1=["a"=>"Subha","b"=>"Rahul","c"=>"Subham","d"=>"Raktim"];   // Associative Array declaration  // where key value is associated with an Array that's call Associative array.
    print_r($ar1);
  ?>
</body>
</html>