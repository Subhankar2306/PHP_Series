<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <form id="userForm" method="post" action="process.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <span class="error" id="usernameError"></span>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <span class="error" id="emailError"></span>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span class="error" id="passwordError"></span>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <script src="validate.js"></script>
</body>
</html>
