<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Database Connection</title>
</head>
<body>
  <center>
    <form method = post action="" >
      <table border = "1">
        <tr>
          <th>Id: </th>
          <td><input type="text" name= txtId></td>
        </tr>
        <tr>
          <th>Name: </th>
          <td><input type="text" name= txtName></td>
        </tr>
        <tr>
          <th>Salary: </th>
          <td><input type="text" name= txtSalary></td>
        </tr>
        <tr>
          <th>Department: </th>
          <td><input type="text" name =txtDept></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Submit" name = "btnsubmit"></td>
        </tr>
      </table>
    </form>

    <?php
    if(isset($_POST['btnsubmit']))
    {
    $empid = $_POST['txtId'];
    $empname = $_POST['txtName'];
    $empsal = $_POST['txtSalary'];
    $edepat = $_POST['txtDept'];
      $myconnection = mysqli_connect("localhost", "root", "", "mydata");
      echo " Connection Successfully"; 
      $sql = "insert into employee values(?,?,?,?)";
      $ps = $myconnection->prepare($sql);
      $ps->bind_param("isis", $empid, $empname, $empsal, $edepat);
      $ps->execute();
      echo "<br> Record inserted Successfully.";  // This way we can connect to the database, and inserted data to ta table.
    }
    ?>
  </center>
</body>
</html>
