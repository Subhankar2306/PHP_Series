<?php
// Database connection
$host = 'localhost';
$username = 'root'; // Replace with your database username
$password = ''; // Replace with your database password
$dbname = 'test_db';

// Establish connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables and errors
$name = $email = $age = "";
$errors = [];

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = trim($_POST['age']);

    // Validation
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }
    if (empty($age) || !is_numeric($age)) {
        $errors[] = "Valid age is required.";
    }

    // Insert into database if no errors
    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO lab_test (name, email, age) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $name, $email, $age);
        if ($stmt->execute()) {
            echo "<p>Data successfully added!</p>";
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation and Database</title>
</head>
<body>
    <h1>Form Validation and Database Storage</h1>
    
    <!-- Form -->
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>"><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>"><br><br>

        <label for="age">Age:</label>
        <input type="text" id="age" name="age" value="<?php echo htmlspecialchars($age); ?>"><br><br>

        <button type="submit">Submit</button>
    </form>

    <!-- Display errors -->
    <?php if (!empty($errors)): ?>
        <div style="color: red;">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <h2>Stored Data</h2>

    <!-- Display Data -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Created At</th>
        </tr>
        <?php
        // Fetch and display data
        $result = $conn->query("SELECT * FROM lab_test");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['age']}</td>
                        <td>{$row['created_at']}</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>
