<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
</head>
<body>
  <center>
    <form method="post" action="">
      <table border="1">
        <tr>
          <th>User Name</th>
          <th><input type="text" name="txtuser"></th>
        </tr>
        <tr>
          <td>Password :</td>
          <td><input type="password" name="txtpass"></td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type="submit" value="Submit" name="submitbtn">
            <input type="reset" value="Reset">
          </td>
        </tr>
      </table>
    </form>
    <?php
    if (isset($_POST['submitbtn'])) {
      $user = $_POST['txtuser'];
      $pass = $_POST['txtpass'];

      if (strcasecmp($user, "Subha") == 0 && strcmp($pass, "panskura") == 0) {
        // echo "<font color='green' size='5'>You are a valid user</font>";
        header("Location:simpleForm.php ");  // by using header() function we can redirect this page to other page
      } else {
        echo "<font color='red' size='5'>You are an invalid user</font>";
      }
    }
    ?>
  </center>
</body>
</html>
