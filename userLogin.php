<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
</head>
<body>
  <center>
    <form method = post action='checklogin.php' >
      <table border=1>
        <tr>
          <th>User Name</th>
          <th><input type=text name= txtuser></th>
        </tr>
        <tr>
          <td>Password :</td>
          <td><input type=password name=txtpass></td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type="submit" value="Submit">
            <input type="reset" value= "Reset">
          </td>
        </tr>
      </table>
    </form>
    <?php

    ?>
  </center>
</body>
</html>