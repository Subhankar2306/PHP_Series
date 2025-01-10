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
        echo "<table border = 1>";
        echo "<tr><th>Emp_Id</th><th>Emp_Name</th><th>Salary</th><th>Departmrnt</th></tr>";
        while($row=mysqli_fetch_assoc($record)){
          // echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ";
          echo "<tr>";
          echo "<td>".$row['emp_id']."</td>";
          echo "<td>".$row['emp_name'] ."</td>";
          echo "<td>".$row['salary'] ."</td>";
          echo "<td>".$row['department'] ."</td>";
          // echo $row['emp_id']." ".$row['emp_name']." ".$row['salary']." ".$row['department']." ";   // When we use mysqli_fetch_assoc then we have to write record name instade of index.
          // echo "<br>";
          echo "</tr>" ;
        }
        echo "</table>";
      } 
      else
      echo "<font color=red size=5>Record not found</font>";
    $mycon->close();
    ?>
  </center>
</body>
</html>