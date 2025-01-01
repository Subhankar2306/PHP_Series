<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String in php</title>
</head>
<body>
  <?php
  // $mystr="Hello i am Subhankar Dhal";
  // // $n=strlen($mystr);  // strlen() function find the Length of a String.
  // $n=str_word_count($mystr);  // str_word_count() function count the total number of word present in a sentance.
  // echo $mystr."<br>";
  // echo "Total Word is :".$n;
  // // echo "Length is :".$n;/

  $str1="Subhankar";
  $str2="subhankar";  // This function() are case sensitive.
  // if(strcmp($str1,$str2)==0)  // For case sensitive
  if(strcasecmp($str1,$str2)==0) // Ignore case sensitive.
    echo "Same String";
  else
    echo "Not same";
// Not same

  ?>
</body>
</html>