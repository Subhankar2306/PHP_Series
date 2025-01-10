<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Database Connection</title>
</head>
<body>
  <center>
    <?php
    $empid = 100;
    $empname = "Subhankar Dhal";
    $empsal = 10000;
    $edepat = 'IT';

    // 1. Connection
    $myconnection = mysqli_connect("localhost", "root", "", "mydata");
    echo " Connection Successfully"; 
    // 2. Query
    $sql = "insert into employee values(?,?,?,?)";
    $ps = $myconnection->prepare($sql);
    $ps->bind_param("isis", $empid, $empname, $empsal, $edepat);
    $ps->execute();
    echo "<br> Record inserted Successfully.";  // This way we can connect to the database, and inserted data to ta table.
    ?>
  </center>
</body>
</html>
