<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array functions</title>
</head>
<body>
  <?php
    // $arr1=array("Mon","Tue","Wed","Sat");
    // $arr2=array("Mon","Wed","Thus","Feb","Tue");
    // $arr3=array("Mon","Wed","Fri","Jan","Sat");

    // // $newarray=array_intersect($arr1,$arr2,$arr3);  // This function() show the common Array element in between them.

    // $newarray=array_diff($arr1,$arr2); // This function() show the diffrent element comparing with arr1 to arr2.

    // print_r($newarray);

    $array1=array("BTech","MCA","BTech","MTech","MCA","BCA");
    $newarray=array_unique($array1); // This function shows unique value without repeating same value.
    
    print_r($newarray);

  ?>
</body>
</html>