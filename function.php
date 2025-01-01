<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function In PHP</title>
</head>
<body>
  <?php
    // function display() // Defination of function
    // {
    //   echo "This is a functon code"; 
    // }
    // // main code
    // display();

    // function sum($a,$b)  // Parameter
    // { 
    //   $s=$a+$b;
    //   echo "Sum is :".$s;
    // }
    // sum(20,50);   // Arguments

    // function sum(...$a)  // Parameter
    // { 
    //   $sum=0;
    //   foreach($a as $m)
    //   {
    //     $sum=$sum+$m;
    //   }
    //   echo "Sum is :".$sum;
    // }
    // sum(20,50);
    // sum(20,50,70);
    // sum(20,50,400);

    // function factorial($n){
    //   $f=1;
    //   while($n!=0){
    //     $f=$f*$n;
    //     $n--;
    //   }
    //   return $f;
    // }
    // $m= factorial(5);
    // echo "Factorial is:".$m;   // This whole concept are call return by value concept.

    // function show($a,$b)  // Call by value or copy by value
    // {
    //   $a=$a+100;
    //   $b=$b+200;
    // }
    // // Call
    // $a=50;
    // $b=20;
    // show($a,$b);
    // echo $a." ".$b;  

    // function show(&$a,&$b)  // Call by reference or copy by reference
    // {
    //   $a=$a+100;
    //   $b=$b+200;
    // }
    // // Call
    // $a=50;
    // $b=20;
    // show($a,$b);
    // echo $a." ".$b;  

    function swap(&$a,&$b)  // Call by reference or copy by reference
    {
      $c=$a;
      $a=$b;
      $b=$c;
    }
    // Call
    $a=50;
    $b=20;
    echo "Before swaping:".$a." ".$b; 
    swap($a,$b);
    echo "<br>After swaping:".$a." ".$b; 
  ?>
</body>
</html> 