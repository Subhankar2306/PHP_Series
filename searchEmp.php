<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fetch Data form database</title>
</head>
<body>
  <center>
    <?php
    $mycon=mysqli_connect("localhost","root","","mydata");
    // echo "Connection Success.";
    $sql="select * from employee";
      $record=$mycon->query($sql); // query() is used when we fetch som data from table
      $n=mysqli_num_rows($record);  // This method is use to count the record present in the table.
      // echo "<br>Total Record:".$n;
      if($n>0){
        while($row=mysqli_fetch_row($record)){
          echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ";
          echo "<br>"; 
        }
      } 
      else
      echo "<font color=red size=5>Record not found</font>";
    ?>
  </center>
</body>
</html>