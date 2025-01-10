<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
</head>
<body>
  <center>
    <form method= post action="page1.php">
      <table border = "1">
        <tr>
          <th>User Name</th>
          <td><input type="text" name= txtuser></td>
        </tr>
        <tr>
          <th>Password</th>
          <td><input type="password" name=txtpass></td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type="submit" value="Submit" name = submitbtn>
            <input type="reset" value="Reset">
          </td>
        </tr>
      </table>
    </form>
  </center>
</body>
</html>