<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <h1>Add New User</h1>

    <?php
    // Database connection settings
    $host = 'localhost'; // Change to your database host
    $user = 'root'; // Change to your database username
    $password = ''; // Change to your database password
    $dbname = 'rk_footwear_erp'; // Change to your database name

    // Connect to the database
    $conn = new mysqli($host, $user, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Process the form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $conn->real_escape_string($_POST['username']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
        $role = $conn->real_escape_string($_POST['role']);

        // Insert user into the database
        $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";

        if ($conn->query($sql) === TRUE) {
            echo "<p style='color: green;'>New user added successfully!</p>";
        } else {
            echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
        }
    }

    // Close the database connection
    $conn->close();
    ?>

    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="role">Role:</label>
        <select id="role" name="role" required>
            <option value="admin">Admin</option>
            <option value="staff">Staff</option>
        </select><br><br>
        
        <button type="submit">Add User</button>
    </form>
</body>
</html>
